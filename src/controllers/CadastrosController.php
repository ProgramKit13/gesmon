<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler; 

class CadastrosCOntroller extends Controller {

   private $loggedUser; 

    public function __construct() { 
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser === false) {

            $this->redirect('/login');
        }

    }

    public function index() {
        $this->render('cadastros', [
            'loggedUser'=>$this->loggedUser]
    );
     }

}