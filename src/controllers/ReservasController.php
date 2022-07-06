<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler; 
use \src\handlers\ReservasHandler; 


class ReservasController extends Controller {

   private $loggedUser;
   private $loggedHotel;

    public function __construct() { 
        $this->loggedUser = LoginHandler::checkLogin();
        $this->loggedHotel = LoginHandler::checkHotel();

        if($this->loggedUser === false) {

            $this->redirect('/login');
        }

    }

    public function index() {
        $infoQuartos = ReservasHandler::infoQuartos(
            $this->loggedHotel->id);

        $this->render('reservas', [
            'loggedUser'=>$this->loggedUser,
            'loggedHotel'=>$this->loggedHotel,
            'infoQuartos'=>$infoQuartos
            ]

    );
    }

    public function editar() {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $entrada = $_POST['entrada'];
        $saida = $_POST['saida'];
        $forma_pg = $_POST['forma_pg'];
        $valor = $_POST['valor'];
        $status = $_POST['status'];
        $obs = $_POST['obs'];

        $update = ReservasHandler::updateLista(
            $id, $nome, $cpf, $entrada, $saida, $forma_pg, $valor, $status, $obs
        );

    }

}