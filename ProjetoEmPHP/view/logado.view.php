<?php
session_start();

if (empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
    header('Location: login.view.php');
}
?>

<!DOCTYPE html>

<html>

    <?php include ('../templates/header.php') ?>


    <picture>
        <source media="(min-width: 640px)" srcset="../assets/utfpr.png">
        <img src="../assets/utfpr.png" alt="Banner">
    </picture>


    <nav>
        <ul>
            <li><a href="cardapioDia.view.php">Cardápio Do Dia</a></li>
            <li><a href="calendario.view.php">Calendário</a></li>
            <li><a href="cadCardapio.view.php">Cadastrar Cardápio</a></li>
            <li class="right"><a href="contato.view.php">Contato</a></li>
            <li class="right"><a class="active" href="../logout.php">Logout</a></li>
        </ul>
    </nav>

    <br>
    <div>
        Você já esta logado!


    </div>

    <br>
    <hr>
    <br>

    <?php include ('../templates/footer.php') ?>

</html>