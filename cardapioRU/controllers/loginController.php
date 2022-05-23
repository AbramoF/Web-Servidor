<?php

class loginController{

    public function verificarLogin(){
        if(!isset($_SESSION)) 
            { 
                session_start();
            }
        $usuario = $_POST['loginUser'];
        $senha = $_POST['loginSenha'];
        
        $bf = new funcoesBanco();

            $user = $bf->buscarPorUsuario($usuario);
            if($user){
                if($user->senha == $senha){
                    if($user->role == 'adm'){
                    $_SESSION['logado'] = true;
                    $_SESSION['usuario'] = 'Administrador';
                    $_SESSION['erro'] = false;
                    header('Location: /');
                    }else if($user->role == 'admru'){
                        $_SESSION['logado'] = true;
                        $_SESSION['usuario'] = 'AdminRU';
                        $_SESSION['erro'] = false;
                        header('Location: /');
                    }
                }
            } 
            $erro = "Email ou senha inválida";
        
        require("views/login.view.php");
    }

}