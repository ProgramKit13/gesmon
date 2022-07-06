<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class LoginController extends Controller {

    public function signin() {
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('login', [
            'flash' => $flash
        ]);
     }

     public function signinAction() {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        if($email && $password) {
            $token = LoginHandler::verifyLogin($email, $password);
            if($token) {
                $_SESSION['token'] = $token;
                $this->redirect('/painel');
            } else {
                $_SESSION['flash'] = 'Email e/ou senha não conferem';
                $this->redirect('/login');
            }
        } else {
            $this->redirect('/login');
        }
     }

     public function cadastro() {
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('cadastro', [
            'flash' => $flash
        ]);
     }



     public function cadastroAction() {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_SANITIZE_SPECIAL_CHARS);
        $nomeprop = filter_input(INPUT_POST, 'nomeprop', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_SANITIZE_SPECIAL_CHARS);
        $modalidade = filter_input(INPUT_POST, 'modalidade');
        $senha = filter_input(INPUT_POST, 'senha');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if($nome && $senha) {
          
            if(LoginHandler::emailExistis($email) === false) {
            $token = LoginHandler::addUser($nome, $nomeprop, $senha, $email, $modalidade);
                $_SESSION['token'] = $token;
                $this->redirect('/configuracao');
            } else {
                $_SESSION['flash'] = 'E-mail já cadastrado.';
                $this->redirect('/cadastro');
            }
        } else {
            $this->redirect('/cadastro');
        }
    }
}



