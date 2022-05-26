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