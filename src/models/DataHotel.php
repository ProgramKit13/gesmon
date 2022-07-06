<?php
namespace src\models;
use \core\Model; 

class DataHotel extends Model {

    public function createTable() {
    global $_pdo;
    	$sql = $pdo->prepare("CREATE TABLE Persons (
            PersonID int,
            LastName varchar(255),
            FirstName varchar(255),
            Address varchar(255),
            City varchar(255)
        ");
    }
}