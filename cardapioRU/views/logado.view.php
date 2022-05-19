<?php
session_start();

if (empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
    header('Location: /Login');
}
?>

<!DOCTYPE html>

<html>

    <?php include ('templates/header.php') ?>


    <picture>
        <source media="(min-width: 640px)" srcset="../assets/utfpr.png">
        <img src="../assets/utfpr.png" alt="Banner">
    </picture>


    <nav>
        <ul>
            <li><a href="/">Cardápio Do Dia</a></li>
            <li><a href="/Calendario">Calendário</a></li>
            <?php
                if (isset($_SESSION['logado']) && $_SESSION['usuario'] == 'Administrador'){
            ?>
                <li><a href="/CadCardapio">Cadastrar Cardápio</a></li>
                <li><a href="/CadCalendario">Cadastrar Calendário</a></li>
            <?php
                }
            ?>
            <li class="right"><a href="/Contato">Contato</a></li>
            <?php
                if (isset($_SESSION['logado'])){
            ?>
                <li class="right"><a  class="active" href="/Logout">Logout</a></li>
            <?php
                }
            ?>
            <?php
                if (empty($_SESSION['logado']) || $_SESSION['logado'] == false){
            ?>
                <li class="right"><a href="/Login">Login</a></li>
            <?php
                }
            ?>
        </ul>
    </nav>

    <br>
    <div class="flex-container" style="max-width: 25%">
        <form class="box-logout" method = "post" action ="../logout.php">
            Deseja Realizar Logout?
            <div class="button">
                <input class="submit-button" type="submit" value="Sim">
            </div>
        </form>
    </div>

    <br>
    <hr>
    <br>

    <?php include ('templates/footer.php') ?>

</html>