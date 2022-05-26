<?php

class CalendarioController{
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

    public function sendCalendario(){
        if(!isset($_SESSION)) 
        { 
            session_start();
        }
        $link = $_POST['linkcalendario'];
        $linkcalendario = new link;
        $bdf = new funcoesBanco();
        $linkcalendario->link = $link;
        $bdf->insertLink($linkcalendario);
        header("Location: /calendario");
    }

}
