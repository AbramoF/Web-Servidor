<?php
    require 'vendor/autoload.php';
    use Pecee\SimpleRouter\SimpleRouter as Router;
  
    Router::get('/', 'indexController@index');
    Router::get('/Login', 'redirectController@carregarLogin');
    Router::get('/Calendario', 'redirectController@carregarCalendario');
    Router::get('/CadCalendario', 'redirectController@carregarCadCalendario');
    Router::get('/CadCardapio', 'redirectController@carregarCadCardapio');
    Router::get('/Logout', 'redirectController@carregarLogout');
    Router::get('/Contato', 'redirectController@carregarContato');
    Router::post('/LoginUser', 'loginController@verificarLogin');
    
    Router::start();
