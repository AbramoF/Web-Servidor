<?php

class IndexController{

    public function index(){
        session_start();
        if (empty($_SESSION['logado']) || !$_SESSION['logado']){
            header("Location: /Login");
        } else{
            header("Location: /Home");
        }
    }
}