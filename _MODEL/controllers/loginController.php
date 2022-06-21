<?php    
print_r($_SESSION['eLogin']);
    class loginController extends controller {
        
        public function index() {
            $dados = array();
            $u = new Usuarios();

            if(isset($_POST['email']) && !empty($_POST['email'])) {
                $email = addslashes($_POST['email']);
                $senha = $_POST['senha'];
                $dados = array('user'=>$u->login($email, $senha));
                header("Location: home");
            } else {
                
            }

            $this->loadView('login', $dados);

        }


    }

