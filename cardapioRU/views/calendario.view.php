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
            <li><a class="active" href="/Calendario">Calendário</a></li>
            <?php
                if (!(session_status() === PHP_SESSION_ACTIVE)){
                session_start();
                }
                if (isset($_SESSION['logado']) && $_SESSION['usuario'] == 'Administrador'){
            ?>
                <li><a href="/CadCardapio">Cadastrar Cardápio</a></li>
                <li><a href="/CadCalendario">Cadastrar Calendário</a></li>
                
            <?php
                }else if(isset($_SESSION['logado']) && $_SESSION['usuario'] == 'AdminRU'){
            ?>
                <li><a href="/CadCardapio">Cadastrar Cardápio</a></li>
            <?php
                }
            ?>
            <li class="right"><a href="/Contato">Contato</a></li>
            <?php
                if (isset($_SESSION['logado'])){
            ?>
                <li class="right"><a href="/Logout">Logout</a></li>
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

    <div class="flex-calendario">
        <iframe src="<?php echo $linkcalendario->link ?>"></iframe>
    </div>

    <?php include ('templates/footer.php') ?>

</html>