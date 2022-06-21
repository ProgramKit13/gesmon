<?php
namespace src;

class Config {
    const BASE_DIR = '/gesmon/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'hotelaria';
    CONST DB_USER = 'root';
    const DB_PASS = '';

    const DB_OPTIONS = [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",]; //esta configuracao atualiza a conexao com UTF8

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}