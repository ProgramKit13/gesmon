<?php $render('sidebar', ['loggedUser' => $loggedUser, 'loggedHotel' => $loggedHotel]); ?>
<link rel="stylesheet" href="<?=$base?>/assets/css/configuracao.css">


<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Configuração</h3>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow-lg o-hidden border-0 my-5">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h4 class="text-dark mb-4">Dados da propriedade</h4>
                                            </div>
                                            <form class="user" id="cadastroprop" action="<?=$base;?>/registrohotel" method="POST">
                                                <div class="row mb-3">


                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input  id="nomeprop" disabled="disabled" class="form-control form-control-user" type="text" placeholder="<?=strtoupper($loggedUser->nomeprop);?>" name="nomeprop" id="nomeprop" />
                                                    </div>

                                                    
                                                    <div class="col-sm-6">
                                                        <input id="cnpj" <?php if($loggedHotel->cnpj !== ''):?> disabled='disabled'<?php endif;?>  class="form-control form-control-user" type="text" placeholder="<?php if($loggedHotel->cnpj !== ''): ?><?php  echo $loggedHotel->cnpj; ?><?php else:?>CNPJ<?php endif ;?>" name="cnpj" id="cnpj" />
                                                        <?php if(!empty($flash)): ?>
                                                            <div class="flash"><?php echo $flash;?></div>
                                                        <?php endif; ?> 
                                                        <script>
                                                        $(document).ready(function(){
                                                            $('#cnpj').mask('00.000.000/0000-00')
                                                        });
                                                        </script>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input id="razaos" <?php if($loggedHotel->razaos !== ''):?> disabled='disabled'<?php endif;?> class="form-control form-control-user texto" type="text" placeholder="<?php if($loggedHotel->razaos !== ''): ?><?php  echo strtoupper($loggedHotel->razaos); ?><?php else:?>Razão social<?php endif ;?>" name="razaos" id="razaos" />
                                                    </div>


                                                    <div class="col-sm-2">
                                                        <input id="nq" <?php if($loggedHotel->nq !== ''):?> disabled='disabled'<?php endif;?> class="form-control form-control-user" type="text" placeholder="<?php if($loggedHotel->nq !== ''): ?><?php echo $loggedHotel->nq; ?><?php else:?>N. de quartos<?php endif ;?>" name="nq" />
                                                       
                                                    </div>

                                                    
                                                    <div class="col-sm-2">
                                                        <input class="form-control form-control-user" <?php if($loggedHotel->telefone !== ''):?> disabled='disabled'<?php endif;?> type="text" placeholder="<?php if($loggedHotel->telefone !== ''): ?><?php  echo $loggedHotel->telefone; ?><?php else:?>Telefone<?php endif ;?>" name="telefone" id="telefone" />
                                                        <script>
                                                        $(document).ready(function(){
                                                            $('#telefone').mask('(00)0000-0000')
                                                        });
                                                        </script>
                                                    </div>
                                                </div>

                                                
                                              
                                                <div class="row mb-3">
                                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                                        <input id="bairro" <?php if($loggedHotel->bairro !== ''):?> disabled='disabled'<?php endif;?> class="form-control form-control-user texto" type="text" placeholder="<?php if($loggedHotel->bairro !== ''): ?><?php  echo strtoupper($loggedHotel->bairro); ?><?php else:?>Bairro<?php endif ;?>" name="bairro" id="bairro" />
                                                    </div>


                                                    <div class="col-sm-5">
                                                        <input id="rua" <?php if($loggedHotel->rua !== ''):?> disabled='disabled'<?php endif;?> class="form-control form-control-user texto" type="text" placeholder="<?php if($loggedHotel->rua !== ''): ?><?php  echo strtoupper($loggedHotel->rua); ?><?php else:?>Rua<?php endif ;?>" name="rua" id="rua" />
                                                    </div>


                                                    <div class="col-sm-2">
                                                        <input id="numero" <?php if($loggedHotel->numero !== ''):?> disabled='disabled'<?php endif;?> class="form-control form-control-user" type="text" placeholder="<?php if($loggedHotel->numero !== ''): ?><?php  echo $loggedHotel->numero; ?><?php else:?>Numero<?php endif ;?>" name="numero" id="numero" />
                                                    </div>
                                                </div>


                                                
                                                <div class="row mb-3">
                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <select <?php if($loggedHotel->estado !== ''):?> disabled='disabled'<?php endif;?> class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example"  name="estado" id="estado">

                                                        <?php if($loggedHotel->estado !== ''): ?><option><?php  echo strtoupper($loggedHotel->estado); ?></option><?php else:?><option>Escolha o estado</option><?php endif ;?>
                                    
                                                        <?php foreach($estados as $estado): ?>
                                                            <option value="<?php echo $estado['id']; ?>"><?php echo $estado['nome']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    </div>


                                                    <div class="col-sm-6">
                                                    <select <?php if($loggedHotel->estado !== ''):?> disabled='disabled'<?php endif;?> class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example" name="cidades" id="cidades">

                                                        <?php if($loggedHotel->cidade !== ''): ?><option><?php  echo strtoupper($loggedHotel->cidade); ?></option><?php else:?><?php endif ;?>

                                                    </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input id="cep" <?php if($loggedHotel->cep !== ''):?> disabled='disabled'<?php endif;?> class="form-control form-control-user" type="text" placeholder="<?php if($loggedHotel->cep !== ''): ?><?php  echo $loggedHotel->cep; ?><?php else:?>CEP<?php endif ;?>" name="cep" id="cep" />
                                                        <script>
                                                        $(document).ready(function(){
                                                            $('#cep').mask('00000-000')
                                                        });
                                                        </script>
                                                    </div>
                                                </div>
                                                    
                                                <button class="btn btn-success" type="submit">Salvar</button>
                                                <hr />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div><div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Usuários e permissões</h6>
                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                        <div class="dropdown-menu dropdown-menu-end shadow animated--fade-in">
                            <h6 class="dropdown-header text-center"><strong>DROPDOWN HEADER:</strong></h6><a class="dropdown-item" href="#"> Action</a><a class="dropdown-item" href="#"> Another action</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"> Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Usuário</th>
                                    <th>Ver Painel</th>
                                    <th>Fazer cadastro</th>
                                    <th>Consultar histórico</th>
                                    <th>Ver pedidos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
        $('#cadastroprop').validate({
            rules:{
                nomeprop:{
                    required: true,
                    letterswithbasicpunc: true,
                    minlength: 3,
                    maxlength: 100
                },
                cnpj:{
                        required: true,
                        cnpjBR:true
                },
                razaos:{
                    required: true,
                    letterswithbasicpunc: true,
                    minlength: 3,
                    maxlength: 100
                },
                bairro:{
                    required: true,
                    letterswithbasicpunc: true,
                    minlength: 5,
                    maxlength: 150
                },
                rua:{
                    required: true,
                    letterswithbasicpunc: true,
                    minlength: 5,
                    maxlength: 150
                },
                numero:{
                    required: true,
                    number:true,
                    maxlength: 5
                },
                nq: {
                    number:true,
                    maxlength: 5
                },
                telefone: {
                    maxlength: 14
                },
                cep: {
                    postalcodeBR: true
                }
            }
        })
    })
</script>
<script type="text/javascript" src="<?=$base?>/assets/js/cadastro/script.js"></script>
<?php $render('footer'); ?>

