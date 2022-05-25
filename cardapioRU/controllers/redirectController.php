<?php

class RedirectController{

    public function carregarLogin(){
        $usuario= '';
        $senha= '';
        $erro = '';
        require 'views/login.view.php';
    }

    public function carregarCalendario(){
        $bf = new funcoesBanco;
        $linkcalendario = $bf->buscarLink();
        require 'views/calendario.view.php';
    }

    public function carregarCadCalendario(){
        require 'views/cadCalendario.view.php';
    }

    public function carregarCadCardapio(){
        require 'views/cadCardapio.view.php';
    }

    public function carregarLogout(){
        require 'views/logado.view.php';
    }

    public function carregarContato(){
        require 'views/contato.view.php';
    }
}