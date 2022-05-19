<?php

class loginController{

    public function verificarLogin(){
        
        $usuario = $_POST['loginUser'] ?? '';
        $senha = $_POST['loginSenha'] ?? '';

        session_start();

        // checar se as credenciais do usuario estão ok
        if ($usuario == 'admin' && $senha == 'qwe123') {
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = 'Administrador';
            $_SESSION['erro'] = false;
            header('Location: /');
        }else if(!empty($_POST)){
            $erro=true;
            header('Location: /Login');
        }

        //Checar se o usuário já está logado
        if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
            header('Location: /');
        }

    }
}