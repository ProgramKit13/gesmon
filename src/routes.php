<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/home', 'HomeController@index');
$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');
$router->get('/cadastro', 'CadastroController@index');