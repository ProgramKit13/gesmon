<!DOCTYPE html><html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>
    <link rel="stylesheet" href="<?=$base?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=$base?>/assets/css/cadastro.css">
    <link rel="stylesheet" type="text/css" href="<?=$base?>/assets/bootstrap/css/bootstrap.min.css" />
    
<script type="text/javascript" src="<?=$base?>/assets/js/jquery.js"></script>
<script type="text/javascript" src="<?=$base?>/assets/js/cadastro/script.js"></script>
<script type="text/javascript" src="<?=$base?>/assets/js/cadastro/mask/dist/jquery.mask.min.js"></script>
<script type="text/javascript" src="<?=$base?>/assets/js/cadastro/jquery.validate.js"></script>
<script type="text/javascript" src="<?=$base?>/assets/js/cadastro/additional-methods.js"></script>
<script type="text/javascript" src="<?=$base?>/assets/js/cadastro/localization/messages_pt_BR.js"></script>




   </head>
<body>
    <nav class="navbar navbar-light navbar-expand-md py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#"><span class="title-home"><img class="title-img" src="assets/img/icon.svg" />Gescon</span></a>
        
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-4"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        
        <div id="navcol-4" class="collapse navbar-collapse flex-grow-0 order-md-first">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="<?=$base?>/login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Fale Conosco</a></li>
            </ul>
        </div>
    </div>
</nav>
<section>
    <h1 class="text-center text-capitalize">Cadastro</h1>
    <div class="container">
        <h3>Dados do gestor ou proprietário</h3>

        <form id="application-form" method="POST" action="<?=$base ?>/cadastro">
            <div class="form-group mb-3">
                <div class="row">

                    <div class="col col-sm-2">
                        <p><strong>Nome</strong><span class="text-danger">*</span></p>
                        <input class="form-control" type="text" id="nome" name="nome" required name placeholder="Ex. João" />
                    </div>

                    <div class="col col-sm-3">
                        <p><strong>Sobrenome</strong><span class="text-danger">*</span></p><input class="form-control" id="sobrenome" name="sobrenome" type="text" required name placeholder="Ex. dos Santos" />
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="row">
                    <div class="col col-lg-2">
                        <p><strong>Nascimento</strong><span class="text-danger">*</span></p><input class="form-control" name="nascimento" id="nascimento" type="date" required name  />
                    </div>


                    <div class="col col-lg-2">
                        <p><strong>CPF</strong><span class="text-danger">*</span></p><input class="form-control" name="cpf" id="cpf" type="text" required name placeholder="xxx.xxx.xxx-xx"/>
                        <script>
                            $( "#cpf" ).keypress(function() {
                                $(this).mask('000.000.000-00');
                            });
                            </script>
                    </div>

                    <div class="col col-lg-2">
                        <p><strong>Telefone </strong><span class="text-danger">*</span></p><input class="form-control" id="telefone" name="telefone" type="text" name placeholder="(xx) xxxx-xxxx">
                        <script>
                            $( "#telefone" ).keypress(function() {
                                $(this).mask('(00) 0000-0000');
                            });
                            </script>
                            </div>
        
                            <div class="col col-lg-2">
                                <p><strong>Celular</strong><span class="text-danger">*</span></p><input class="form-control" id="celular" name="celular" type="text" name placeholder="(xx) xxxxx-xxxx">
                                <script>
                                    $( "#celular" ).keypress(function() {
                                        $(this).mask('(00) 00000-0000');
                                    });
                                    </script>
                                </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="row">
                    <div class="col col-sm-3">
                <p><strong>Email </strong><span class="text-danger">*</span></p><input class="form-control" id="email" name="email" type="email" name placeholder="user@domain.com" />
                    </div>

                <div class="col col-sm-3">
                <p><strong>Confir. de email</strong><span class="text-danger">*</span></p><input class="form-control" name="email2" id="email2" type="email" name placeholder="user@domain.com" />
                </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <p><strong>Endereço Residencial</strong><span class="text-danger">*</span></p>

                <div class="row">
                    <div class="col col-sm-4">
                        <p>Rua</p>
                        <input class="form-control" name="rua" id="rua" type="text" required name />
                    </div>

                    <div class="col col-sm-4">
                        <p>Bairro</p>
                        <input class="form-control" id="bairro" name="bairro" type="text" required name  />
                    </div>


                    <div class="col col-sm-1">
                        <p>Numero</p>
                        <input class="form-control" id="numero" name="numero" type="number" onkeypress="num(this)" required name  />
                        </div>
                </div>
            </div>


            <div class="form-group mb-3">
                <div class="row">

                    <div class="col col-sm-2">
                        <p>Cidade</p>
                        <input class="form-control" id="cidade" name="cidade" type="text" required name />
                    </div>

                    <div class="col col-sm-2">
                        <p>Estado</p>
                        <input class="form-control" type="text" id="estado" name="estado" required name />
                    </div>

                    <div class="col">
                        <p>CEP</p>
                        <input class="form-control"  style="width: 100px" type="text" required name placeholder="xxxxx-xxx" name="cep" id="cep" />
                        <script>
                            $( "#cep" ).keypress(function() {
                                $(this).mask('00000-000');
                            });
                            </script>
                    </div>
                </div>
                
            </div>

            <br/><br/>

            <h3>Dados da propriedade</h3>
            <div class="form-group mb-3">
                <div class="row">
                    <div class="col col-lg-3">
                        <p><strong>Razão social</strong><span class="text-danger">*</span></p><input class="form-control" id="razaos" name="razaos" type="text" required name  />
                    </div>

                    <div class="col col-lg-2">
                        <p><strong>CNPJ</strong><span class="text-danger">*</span></p><input class="form-control" id="cnpj" name="cnpj" type="text" required name placeholder="00.000.000/0000-00" />
                        <script>
                            $( "#cnpj" ).keypress(function() {
                                $(this).mask('00.000.000/0000-00');
                            });
                            </script>
                    </div>

                    <div class="col col-lg-2">
                        <p><strong>Insc. estadual</strong><span class="text-danger">*</span></p><input class="form-control" type="number" id="insc" onkeypress="num(this)" name="insc" name  />
                    </div>

                    <div class="col col-lg-2">
                        <p><strong>Telefone</strong>
                            <span class="text-danger">*</span></p>
                            <input class="form-control" id="telcon" name="telecon" type="text" name placeholder="(xx) xxxx-xxxx">
                            <script>
                                 $( "#telcon" ).keypress(function() {
                                        $(this).mask('(00) 0000-0000');
                                });
                            </script>
                    </div>
                </div>
            </div>
            
            <div class="form-group mb-3">
                <div class="row">
                    <div class="col col-sm-3">
                <p><strong>Email</strong><span class="text-danger">*</span></p><input class="form-control" id="emailcom" name="email" type="emailcom" name placeholder="user@domain.com" />
                    </div>

                <div class="col col-sm-3">
                <p><strong>Confir. de email</strong><span class="text-danger">*</span></p><input class="form-control" name="emailcom2" id="emailcom2" type="email" name placeholder="user@domain.com" />
                </div>
                </div>
            </div>


            <div class="form-group mb-3">
                <p><strong>Endereço Comercial</strong><span class="text-danger">*</span></p>

                <div class="row">
                    <div class="col col-lg-4">
                <input class="form-control" name="ruacom" id="ruacom" type="text" required name />
                <p>Rua</p>
                    </div>

                    <div class="col col-lg-4">
                <input class="form-control" id="bairrocom" name="bairrocom" type="text" required name  />
                <p>Bairro</p>
                    </div>


                    <div class="col col-lg-1">
                        <input class="form-control" id="numerocom" name="numerocom" type="number" onkeypress="num(this)" required name  />
                        <p>Numero</p>
                            </div>
                </div>
            </div>


            <div class="form-group mb-3">
                <div class="row">
                    <div class="col col-lg-2">
                        <input class="form-control" id="cidadecom" name="cidadecom" type="text" required name />
                        <p>Cidade</p>
                    </div>
            
                    <div class="col col-lg-2"><input class="form-control" type="text" id="estadocom" name="estadocom" required name />
                        <p>Estado</p>
                    </div>

                    <div class="col col-lg-2">
                        <input class="form-control" type="text" required name placeholder="xxxxx-xxx" name="cepcom" style="width: 100px;" id="cepcom" />
                        <p>CEP</p>
                        <script>
                            $( "#cepcom" ).keypress(function() {
                                $(this).mask('00000-000');
                            });
                            </script>
                    </div>
                </div>

            </div>
            <input class="btn btn-success" type="submit" value="Cadastrar" />
        </form>
</section>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/script.min.js"></script>

</body>
</html>