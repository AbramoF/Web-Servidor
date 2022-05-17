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
            <li class="right"><a class="active">Logout</a></li>
        </ul>
    </nav>

    <br>
    <div class="flex-container" style="max-width: 25%">
        <form class="box-logout" method = "post" action ="../logout.php">
            Deseja Realizar Logout?
            <div class="button">
                <input class="submit-button" type="submit" value="Logout">
            </div>
        </form>
    </div>

    <br>
    <hr>
    <br>

    <?php include ('../templates/footer.php') ?>

</html>