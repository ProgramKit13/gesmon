<body>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/login-form.css" />
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<div class="container-fluid">
<form method="post">
    <div class="row mh-100vh">
        <div id="login-block" class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0">
            <div class="m-auto w-lg-75 w-xl-50">
                <h1 class="fw-bold text-center text-info fw-light mb-5"><img class="icon" src="assets/img/icon.svg" />LOGIN</h1>
                <form>
                    <div class="form-group mb-3" id="form">
                        <label class="form-label text-secondary">Email</label>
                        <input class="form-control" type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email" />
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label text-secondary">Senha</label>
                        <input class="form-control" type="password" name="senha" required />
                    </div>                    
                    <button class="btn btn-info mt-2" type="submit" id="logar">Entrar</button>
                    <button class="btn btn-warning mt-2">Cadastrar</button>
                </form>
                <p class="mt-3 mb-0"><a class="text-info small" href="#">Esqueceu sua senha?</a></p>
            </div>
        </div>
        <div id="bg-block" class="col-lg-6 d-flex align-items-end" style="background-image: url('assets/img/bg.svg');background-size: cover;background-position: center center;">
        </div>
    </div>
</form>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/boostrap/js/bootstrap.min.js"></script>
</div>