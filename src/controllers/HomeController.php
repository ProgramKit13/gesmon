<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler; 
use \src\models\DataHotel; 

class HomeController extends Controller {

   private $loggedUser; 

    public function __construct() { 
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser === false) {

            $this->redirect('/login');
        }

    }

    public function index() {
        
        
        $this->render('painel', [
            'loggedUser'=>$this->loggedUser]
    );
     }

}