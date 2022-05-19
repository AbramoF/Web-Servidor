<?php

class redirectController{

    public function carregarLogin(){
        $erro;
        require 'views/login.view.php';
    }

    public function carregarCalendario(){
        require 'views/calendario.view.php';
    }

    public function carregarCadCalendario(){
        require 'views/cadCalendario.view.php';
    }

    public function carregarCadCardapio(){
        require 'views/cadCardapio.view.php';
    }

    public function carregarLogout(){
        require 'logout.php';
    }

    public function carregarContato(){
        require 'views/contato.view.php';
    }
}