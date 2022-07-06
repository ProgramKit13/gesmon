<tr>
                <td>
                    <div>
                        <a class="btn btn-warning btn-sm" role="button" onclick="editar(<?php echo $data->id ;?>)" href="#qt_edit<?php echo $data->nq ;?> " data-bs-toggle="modal"><i class="fas fa-edit text-light"></i></a>
                        <div id="qt_edit<?php echo $data->nq ;?>" class="modal fade modal-js" role="dialog" tabindex="-1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Quarto <?php echo $data->nq ;?> </h4><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                        <div class="modal-body">
                                            <form method="POST">
                                                <div class="container">
                                                        <div class="row mb-4">
                                                            <div class="col-md-6">
                                                            <label for="nome" class="form-label">Nome</label>
                                                                <input type="text" class="form-control texto" name="nome" <?php if($data->cliente !== ''): ?> value="<?php echo $data->cliente ;?>" <?php endif ;?> />
                                                            </div>
                                                            <div class="col-md-6">
                                                            <label for="cpf" class="form-label">CPF</label>
                                                                <input type="text" class="form-control" name="cpf" id="cpf" <?php if($data->cpf !== ''): ?> value="<?php echo $data->cpf ;?>" <?php endif ;?> />
                                                                <script>
                                                                    $(document).ready(function(){
                                                                        $('#cpf').mask('000.000.000-00')
                                                                    });
                                                                    </script>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-6">
                                                            <label for="entrada" class="form-label">Data de entrada</label>  
                                                            <input type="date" class="form-control" name="entrada" <?php if($data->entrada !== ''): ?> value="<?php echo $data->entrada ;?>" <?php endif ;?> />
                                                            </div>
                                                            <div class="col-md-6">
                                                            <label for="saida" class="form-label">Data de saída</label>
                                                                <input type="date" class="form-control" name="saida" <?php if($data->saida !== ''): ?> value="<?php echo $data->saida ;?>" <?php endif ;?> />
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-6">
                                                            <label for="forma_pg" class="form-label">Forma de pagamento</label>

                                                          
                                                            <select class="form-select" name="forma_pg">
                                                            <option></option>
                                                            <option value="0" <?php if($data->forma_pg == '0'): ?>selected<?php endif ;?>>Dinheiro</option>
                                                            <option value="1" <?php if($data->forma_pg == '1'): ?>selected<?php endif ;?>>Débito</option>
                                                            <option value="2" <?php if($data->forma_pg == '2'): ?>selected<?php endif ;?>>Crédito</option>
                                                           
                                                            </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <label for="valor" class="form-label">Valor R$:</label>
                                                                <input type="text" class="form-control" name="valor" id="valor" <?php if($data->valor !== ''): ?> value="<?php echo $data->valor ;?>" <?php endif ;?> onKeyPress="return(moeda(this,'.',',',event))" />
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-12 position-iconModal">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select class="form-select" name="status">
                                                            <option value="0" <?php if($data->status == '0'): ?>selected<?php endif ;?>>Reservado</option>
                                                            <option value="1" <?php if($data->status == '1'): ?>selected<?php endif ;?>>Liberado</option>
                                                            </select>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-md-12 position-iconModal">
                                                            <label for="obs" class="form-label">Obs:</label>
                                                            <textarea class="form-control" aria-label="With textarea" name="obs"><?php if($data->obs !== ''): ?><?php echo $data->obs ;?><?php endif ;?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Fechar</button>
                                                    <button class="btn btn-primary" type="submit">Salvar</button>
                                                </div>
                                            </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td><?=$data->nq ;?></td>
                <td>
                    <?php if($data->status == '0'):?><i class="fas fa-times-circle fs-2 text-danger"  data-bs-toggle="tooltip" title="Reservado"></i><?php endif;?>
                    <?php if($data->status == '1'):?><i class="fas fa-check-circle fs-2 text-success"  data-bs-toggle="tooltip" title="Desocupado"></i><?php endif;?> 
                </td>

                <td><?=$data->entrada ;?></td>
                <td><?=$data->saida ;?></td>
                <td><?=$data->cliente ;?></td>
                <td>
                    <div>
                        <div><a class="btn btn-secondary btn-lg d-inline btn-sm" role="button" href="#list_pedidos" data-bs-toggle="modal"><i class="far fa-clipboard"></i></a><span class="badge rounded-pill bg-primary text-truncate">-</span>
                            <div id="list_pedidos" class="modal fade" role="dialog" tabindex="-1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4>Pedidos</h4><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center text-muted">lista de pedidos </p>
                                        </div>
                                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancelar</button><button class="btn btn-primary" type="button">Salvar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td><?=$data->valor ;?></td>
                <td>
                    <div><a class="btn btn-warning btn-sm btn-sm" role="button" href="#info_modal" data-bs-toggle="modal"><i class="fas fa-info-circle"></i></a>
                        <div id="info_modal" class="modal fade" role="dialog" tabindex="-1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Informações</h4><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center text-muted">area de informações </p>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancelar</button><button class="btn btn-primary" type="button">Salvar</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>