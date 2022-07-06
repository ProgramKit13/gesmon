<?php
namespace src\Handlers;
use \src\models\Hotel;
use \src\models\Reserva;


class ReservasHandler {


    public static function infoQuartos($idHotel) {

        $listaQt = Reserva::select()->where('id_hotel', $idHotel)->orderBy('nq', 'asc')->get();

        $listaQuartos = [];
        foreach($listaQt as $qtItem) {
          $qtLista = new Reserva();
          $qtLista->id = $qtItem['id'];
          $qtLista->nq = $qtItem['nq'];
          $qtLista->status = $qtItem['status'];
          $qtLista->entrada = $qtItem['entrada'];    
          $qtLista->saida = $qtItem['saida'];
          $qtLista->cliente = $qtItem['cliente'];
          $qtLista->valor = $qtItem['valor'];
          $qtLista->cpf = $qtItem['cpf'];
          $qtLista->forma_pg = $qtItem['forma_pg'];
          $qtLista->valor = $qtItem['valor'];
          $qtLista->obs = $qtItem['obs'];                  

          $listaQuartos[] = $qtLista;


        }
        
        return $listaQuartos;
    }


    public static function updateLista($id, $nome, $cpf, $entrada, $saida, $forma_pg, $valor, $status, $obs){

      Reserva::update()->set(['cliente' => $nome, 'cpf' => $cpf, 'forma_pg' => $forma_pg, 'valor' => $valor, 'status' => $status, 'obs' => $obs, 'entrada' => $entrada, 'saida' => $saida])->where('id', $id)->execute();
    }
}