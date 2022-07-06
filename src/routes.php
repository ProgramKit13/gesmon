<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/home', 'HomeController@index');
$router->get('/painel', 'HomeController@index');
$router->get('/reservas', 'ReservasController@index');
$router->post('/reservas/editar', 'ReservasController@editar');
$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');
$router->get('/cadastro', 'LoginController@cadastro');
$router->post('/cadastro', 'LoginController@cadastroAction');
$router->get('/configuracao', 'ConfiguracaoController@index');
$router->post('/configuracao', 'ConfiguracaoController@cidades');
$router->post('/registrohotel', 'ConfiguracaoController@hotelAction');
$router->get('/cadastros', 'CadastrosController@index');


//$router->get('/reservas');
//$router->get('/pedidos');
//$router->get('/cadastro');
//$router->get('/painel');
//$router->get('/clientes');
//$router->get('/painel');
//$router->get('/historico');
//$router->get('/calendario');
//$router->get('/ferramentas');
//$router->get('/sair');
//$router->get('/alertas');
//$router->get('/informativos');
//$router->get('/perfil');
//$router->get('/configuracao');
//$router->get('/registros');
//$router->get('/sair');
//$router->get('/pesquisa');



