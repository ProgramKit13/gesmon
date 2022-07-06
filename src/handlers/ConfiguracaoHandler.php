<?php
namespace src\Handlers;
use \src\models\Hotel;
use \src\models\User;
use \src\models\Reserva;


class ConfiguracaoHandler {


    public static function hotelExistis($cnpj) {
        $user = Hotel::select()->where('cnpj', $cnpj)->execute();
        return $user ? true : false;
    }

    public static function addHotel($cnpj, $razaos, $nq, $telefone, $bairro, $rua, $numero, $estado, $cidade, $cep) {

        Hotel::insert([
            'cnpj' => $cnpj,
            'razaos' => $razaos,
            'nq' =>$nq,
            'telefone' => $telefone,
            'bairro' => $bairro,
            'rua' => $rua,
            'numero' => $numero,
            'estado' => $estado,
            'cidade' => $cidade,
            'cep' => $cep
        ])->execute();


    }

}