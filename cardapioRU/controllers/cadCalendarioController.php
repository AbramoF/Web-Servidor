<?php

class CadCalendarioController{
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
