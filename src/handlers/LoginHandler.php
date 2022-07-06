<?php
namespace src\Handlers;

use \src\models\User;
use \src\models\Hotel;

class LoginHandler {

    public static function checkLogin() {
        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $token)->one();
   
            if(count($data) > 0) {

                $loggedUser = new User();
                $loggedUser->id = $data['id'];
                $loggedUser->nome = $data['nome'];
                $loggedUser->nomeprop = $data['nomeprop'];  
                return $loggedUser;
            }

        }
        return false;
    } 

    public static function checkHotel() {
        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $token)->one();
            $dataHotel = Hotel::select()->where('id', $data['idprop'])->one();


            if($dataHotel === false) {
                $loggedHotel = new Hotel();
                $loggedHotel->id = '';
                $loggedHotel->razaos = ''; 
                $loggedHotel->cnpj = '';      
                $loggedHotel->nq = '';
                $loggedHotel->telefone = '';
                $loggedHotel->rua = ''; 
                $loggedHotel->bairro = ''; 
                $loggedHotel->numero = '';
                $loggedHotel->cidade = '';
                $loggedHotel->estado = '';
                $loggedHotel->cep = '';
                return $loggedHotel;

            } else {
            if(count($data) > 0) {
                $loggedHotel = new Hotel();
                $loggedHotel->id = $dataHotel['id'];
                $loggedHotel->razaos = $dataHotel['razaos']; 
                $loggedHotel->cnpj = $dataHotel['cnpj'];      
                $loggedHotel->nq = $dataHotel['nq'];
                $loggedHotel->telefone = $dataHotel['telefone'];
                $loggedHotel->rua = $dataHotel['rua']; 
                $loggedHotel->bairro = $dataHotel['bairro']; 
                $loggedHotel->numero = $dataHotel['numero'];
                $loggedHotel->cidade = $dataHotel['cidade'];
                $loggedHotel->estado = $dataHotel['estado'];
                $loggedHotel->cep = $dataHotel['cep'];
                
                return $loggedHotel;

            }

            }
        }
        return false;
    } 

    public static function verifyLogin($email, $senha) {
        $user = User::select()->where('email', $email)->one();

        if($user) {
            if(password_verify($senha, $user['senha'])) {
                $token = md5(time().rand(0,9999).time());

                User::update()
                    ->set('token', $token)
                    ->where('email', $email)
                ->execute();

                return $token;
            }
        }

        return false;
    }

    public static function emailExistis($email) {
        $user = User::select()->where('email', $email)->execute();
        return $user ? true : false;
    }

    public static function addUser($nome, $nomeprop, $senha, $email) {
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $token = md5(time().rand(0,9999).time());

        User::insert([
            'nome' => $nome,
            'nomeprop' => $nomeprop,
            'email' =>$email,
            'senha' => $hash,
            'token' => $token
        ])->execute();

        return $token;
    }


}