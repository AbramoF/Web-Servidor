<?php
$usuario = $_POST['loginUser'] ;
$senha = $_POST['loginSenha'] ;
$erro = false;

session_start(); //AshgdjagJAgsda

// checar se as credenciais do usuario estão ok
if ($usuario == 'abrao' && $senha == 'qwe123') {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = 'Administrador';
    $_SESSION['tempo'] = '411111111111111';
    $erro=false;

    header('Location: logado.php');
} else{
    $erro = true;
}

if($erro==true)
echo "BUGOU";

//Checar se o usuário já está logado
if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
    header('Location: logado.php');
}
?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset='utf-8'>
        <title>RU UTFPR</title>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    </head>
    <body>
    

            <picture>
                <source media="(min-width: 640px)" srcset="utfpr.png" > <!--banner grande-->
                <img src="utfpr.png" alt="Banner" style="width:auto;"> <!--banner peq-->
            </picture>


    <nav>
        <ul>
            <li><a href="cardapioDia.php">Cardápio Do Dia</a></li>
            <li><a href="calendario.php">Calendário</a></li>
            <li><a style="color:rgb(55, 52, 53)" href="cadCardapioAdm.php">Cadastrar Cardápio</a></li>
            <li style="float:right"><a href="contato.php">Contato</a></li>
            <li class="active" style="float:right"><a href="login.php">Login</a></li>
        </ul>
    </nav>

<br>
    <div>
        Você já esta logado!
    </div>
    
    <br>
    <hr>
    <br>
    
<footer>
    <address>
        UTFPR<BR>
        R. Doutor Washington Subtil Chueire, 330<br>
        Jardim Carvalho<br>
        Ponta Grossa<br>
        (42)4002-8922
    </address>
</footer>

</body>
</html>