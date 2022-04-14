<?php
$usuario = $_POST['loginUser'] ?? '';
$senha = $_POST['loginSenha'] ?? '';
$erro = false;

session_start(); //AshgdjagJAgsda

// checar se as credenciais do usuario estão ok
if ($usuario == 'admin' && $senha == 'qwe123') {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = 'Administrador';

    header('Location: logado.php');
} else if (!empty($_POST)) {
    $erro = true;
}

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
        <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    </head>
    <body>
    

            <picture>
                <source media="(min-width: 640px)" srcset="../assets/utfpr.png" > <!--banner grande-->
                <img src="../assets/utfpr.png" alt="Banner"> <!--banner peq-->
            </picture>


    <nav>
        <ul>
            <li><a href="cardapioDia.php">Cardápio Do Dia</a></li>
            <li><a href="calendario.php">Calendário</a></li>
            <li class="right"><a href="contato.php">Contato</a></li>
            <li class="right" ><a class="active" href="login.php">Login</a></li>
        </ul>
    </nav>

<br>
    <div style="max-width: 40%">
        <form class="box-login" action="login.php" method="post">

            <label for="login">Usuário : </label>
            <input type="text" id="username" name="loginUser" required placeholder="Digite seu usuário...">

            <label for="login">Senha : </label>
            <input type="password" id="password" name="loginSenha" required placeholder="Digite sua senha...">
            <div class="button">
                <input class="submit-button" type="submit" value="Submit">
            </div>
        </form>
    </div>
    
    <br>
    <hr>
    <br>
    
    <?php        
        if (!isset($_SESSION['array'])){
            $array =[];
        }
        else{
            $array = $_SESSION['array'];
        }
    ?>





<footer>
    <address>
        UTFPR<br>
        R. Doutor Washington Subtil Chueire, 330<br>
        Jardim Carvalho<br>
        Ponta Grossa<br>
        (42)4002-8922
    </address>
</footer>

</body>
</html>