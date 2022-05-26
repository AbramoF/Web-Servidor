<?php

class RedirectController{

    public function carregarLogin(){
      
        if (!(session_status() === PHP_SESSION_ACTIVE)){
        session_start();
        }
        if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
            header('Location: /');
        }

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
            if (!(session_status() === PHP_SESSION_ACTIVE)){
                session_start();
            }
            if (empty($_SESSION['logado']) || $_SESSION['logado'] == false){
                header('Location: /login');
            }
        require 'views/cadCalendario.view.php';
    }

    public function carregarCadCardapio(){
        if (!(session_status() === PHP_SESSION_ACTIVE)){
            session_start();
        }
        if (empty($_SESSION['logado']) || $_SESSION['logado'] == false){
            header('Location: /login');
        }
        require 'views/cadCardapio.view.php';
    }

    public function carregarLogout(){
        require 'views/logado.view.php';
    }

    public function carregarContato(){
        require 'views/contato.view.php';
    }

    public function error404(){
        require 'views/error404.view.php';
    }
}