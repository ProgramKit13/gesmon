<!DOCTYPE html><html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>
        <link rel="stylesheet" href="<?=$base?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base?>/assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?=$base?>/assets/css/cadastro.css">
    
<script type="text/javascript" src="<?=$base?>/assets/js/jquery.js"></script>
<script type="text/javascript" src="<?=$base?>/assets/js/cadastro/script.js"></script>
<script type="text/javascript" src="<?=$base?>/assets/js/cadastro/jquery.validate.js"></script>
<script type="text/javascript" src="<?=$base?>/assets/js/cadastro/additional-methods.js"></script>
<script type="text/javascript" src="<?=$base?>/assets/js/cadastro/localization/messages_pt_BR.js"></script>

</head>
<body>
<div class="container">
    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="flex-grow-1 bg-register-image" style="background-image: url('<?=$base;?>/assets/img/cadastro/bg.svg');"></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Crie sua conta</h4>
                        </div>
                        <form class="user" method="POST" action="<?=$base ;?>/cadastro">
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="nome" class="form-control form-control-user texto" type="text" placeholder="Nome completo" name="nome" />
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="nomeprop" class="form-control form-control-user texto" type="text" placeholder="Nome da empresa" name="nomeprop" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <input id="email" class="form-control form-control-user" type="email" aria-describedby="emailHelp" placeholder="Endereço de email" name="email" />
                            </div>
                            <div class="mb-3">
                                <input id="email2" class="form-control form-control-user" type="email" placeholder="Confirme o email" name="email2" />
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="senha" class="form-control form-control-user" type="password" placeholder="Senha" name="senha" />
                                </div>
                                <div class="col-sm-6">
                                    <input id="senha2" class="form-control form-control-user" type="password" placeholder="Repita a senha" name="senha2" />
                                </div>
                            </div>
                            <button class="btn btn-primary d-block btn-user w-100" type="submit">Cadastrar</button>
                            <hr />
                            <a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button">
                                <i class="fab fa-google"></i>  Cadastrar com uma conta Google</a>
                                <a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button">
                                    <i class="fab fa-facebook-f"></i>  Cadastrar com uma conta Fecebook</a>
                            <hr />
                        </form>
                        <div class="text-center"><a class="small" href="<?=$base;?>/login">Já tem uma conta? Faça o login!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function(){
        $('.user').validate({
            rules:{
                nome:{
                        required: true,
                        minlength: 5,
                        maxlength: 100
                },
                nomeprop:{
                    required: true,
                    minlength: 3,
                    maxlength: 100
                },
                email:{
                        required: true,
                        email: true
                },
                email2:{
                    required: true,
                    email: true,
                    equalTo: '#email'
                },
                senha: {
                    required: true,
                    minlength: 4,
                    maxlength: 20
                },
                senha2: {
                    required: true,
                    minlength: 4,
                    maxlength: 20,
                    equalTo: '#senha'
                }
            }
        })
    })



    
</script>

<script src="<?=$base?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=$base?>/assets/js/script.min.js"></script>

</body>
</html>