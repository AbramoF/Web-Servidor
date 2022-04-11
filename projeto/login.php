<?php

$user= $_POST["username"] ?? null;

$senha = $_POST["password"] ?? null;

session_start();


if($user== MYSQL SELECT ADMIN && $senha == MYSQL SELECET ADMIN SENHA){

    $_SESSION['logado']="true";
    $_SESSION['usuario']= $usuario;
    $_SESSION['tempo']= time()+60*60*12;

    header("Location: cadCardapioAdm.html")
}

if(isset($_SESSION["logado"]) && $_SESSION["logado"] == "true"){
    header("Location : cadCardapioAdm.html");

}
?>