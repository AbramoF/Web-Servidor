<?php
    require 'vendor/autoload.php';
    use Pecee\SimpleRouter\SimpleRouter as Router;
  
    Router::get('/', 'IndexController@index');
    Router::get('/login', 'RedirectController@carregarLogin');
    Router::get('/calendario', 'RedirectController@carregarCalendario');
    Router::get('/logout', 'RedirectController@carregarLogout');
    Router::get('/contato', 'RedirectController@carregarContato');
    Router::post('/loginUser', 'LoginController@verificarLogin');

    Router::get('/cadCalendario', 'RedirectController@carregarCadCalendario');
    Router::get('/cadCardapio', 'RedirectController@carregarCadCardapio');
    Router::post('/sendCalendario', 'CadCalendarioController@sendCalendario');
    Router::post('/sendCardapio', 'CadCardapioController@sendCardapio');
    
    Router::error(function() {

        header("Location: /notFound");
        
    });
    Router::get('/notFound', 'RedirectController@error404');

    Router::start();