<?php
    require 'vendor/autoload.php';
    use Pecee\SimpleRouter\SimpleRouter as Router;
  
    Router::get('/', 'IndexController@index');
    Router::get('/calendario', 'CalendarioController@carregarCalendario');
    Router::get('/login', 'RedirectController@carregarLogin');
    Router::get('/logout', 'RedirectController@carregarLogout');
    Router::get('/contato', 'RedirectController@carregarContato');
    Router::post('/loginUser', 'LoginController@verificarLogin');

    Router::get('/cadCalendario', 'CalendarioController@carregarCadCalendario');
    Router::get('/cadCardapio', 'CardapioController@carregarCadCardapio');
    Router::post('/sendCalendario', 'CalendarioController@sendCalendario');
    Router::post('/sendCardapio', 'CardapioController@sendCardapio');
    
    Router::error(function() {

        header("Location: /notFound");
        
    });
    Router::get('/notFound', 'RedirectController@error404');

    Router::start();