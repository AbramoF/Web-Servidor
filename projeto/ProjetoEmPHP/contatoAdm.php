<?php

session_start();

if(empty($_SESSION['logado']) || $_SESSION['logado']==false)
    header('Location: login.php')
?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset='utf-8'>
        <title>RU UTFPR</title>
        <link rel='stylesheet' type='text/css' media='screen' href='assets/style.css'>
    </head>
    <body>
    
 
            <picture>
                <source media="(min-width: 640px)" srcset="utfpr.png" > <!--banner grande-->
                <img src="utfpr.png" alt="Banner" > <!--banner peq-->
            </picture>


    <nav>
        <ul>
            <li><a href="cardapioDiaAdm.php">Cardápio Do Dia</a></li>
            <li><a href="calendarioAdm.php">Calendário</a></li>
            <li ><a href="cadCardapioAdm.php">Cadastrar Cardápio</a></li>
            <li class="right"><a class="active" href="contatoAdm.php">Contato</a></li>
            <li class="right"><a href="login.php">Login</a></li>
        </ul>
    </nav>
<br>

    <div> Entre em contato conosco! Qualquer duvida, sugestão ou reclamação!</div>
    <div> Através do número (42)4002-8922.</div>
    <div>SAC 08001234114.</div>
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