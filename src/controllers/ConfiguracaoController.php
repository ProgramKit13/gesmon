<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\ConfiguracaoHandler;
use \src\models\Estado;
use \src\models\Cidade; 
use \src\models\Reserva; 
use \src\models\User; 
use \src\models\Hotel; 


class ConfiguracaoController extends Controller {

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
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }


        $estados = Estado::select()->orderBy('nome', 'asc')->get();

        $this->render('configuracao', [
            'loggedUser'=>$this->loggedUser,
            'loggedHotel'=>$this->loggedHotel,
            'estados'=>$estados,
            'flash'=>$flash
        ]
    );
    }

    public function cidades() {
    
        $cidades = Cidade::select()->where('estados_id', $_POST['id'])->get();
        echo json_encode($cidades);

        exit;

    }


    public function hotelAction() {
        $this->loggedUser = LoginHandler::checkLogin();

        $idcidade = strval(filter_input(INPUT_POST, 'cidades'));
        $idestado = strval(filter_input(INPUT_POST, 'estado'));

        $datecidade = Cidade::select()->where('id', $idcidade)->one();
        $cidade = $datecidade['nome'];

        $dateestado = Estado::select()->where('id', $idestado)->one();
        $estado = $dateestado['nome'];

        $cnpj = filter_input(INPUT_POST, 'cnpj');
        $razaos = filter_input(INPUT_POST, 'razaos', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_SANITIZE_SPECIAL_CHARS);
        $nq = filter_input(INPUT_POST, 'nq');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_SANITIZE_SPECIAL_CHARS);
        $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_SANITIZE_SPECIAL_CHARS);
        $numero = filter_input(INPUT_POST, 'numero');
        $cep = filter_input(INPUT_POST, 'cep');


        if($cnpj) {
            if(ConfiguracaoHandler::hotelExistis($cnpj) === false) {
            $addHotel = ConfiguracaoHandler::addHotel($cnpj, $razaos, $nq, $telefone, $bairro, $rua, $numero, $estado, $cidade, $cep );

            $dataHotel = Hotel::select()->where('cnpj', $cnpj)->one();
            $idHotel = $dataHotel['id']; 

            for($i=1; $i<=$nq ;$i++) {
            Reserva::insert([
                'nq' => $i,
                'id_hotel' => $idHotel
            ])->execute();
            }
            
            User::update()
                    ->set('idprop', $idHotel)
                    ->where('id',  $this->loggedUser->id)
                ->execute();
            Hotel::update()
                    ->set('nomeprop', $this->loggedUser->nomeprop)
                    ->where('cnpj',  $cnpj)
                ->execute();
                
                $this->redirect('/configuracao');
               
            } else {
                $_SESSION['flash'] = 'Cnpj já cadastrado.';
                $this->redirect('/configuracao');
            }
        } else {
            $this->redirect('/configuracao');
        }
    }

}

