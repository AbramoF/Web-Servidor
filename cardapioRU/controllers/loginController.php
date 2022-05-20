<?php

class loginController{

    public function verificarLogin(){
        if(!isset($_SESSION)) 
            { 
                session_start();
            }
        $usuario = $_POST['loginUser'] ?? '';
        $senha = $_POST['loginSenha'] ?? '';
        
        if ($usuario == 'admin' && $senha == 'qwe123') {
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = 'Administrador';
            $_SESSION['erro'] = false;
            header('Location: /');
        }
        else {
            $erro = "Email ou senha inválida";
        }
        
        require("views/login.view.php");
    }

}