<?php

session_start();

if (empty($_SESSION['logado']) || $_SESSION['logado'] == false)
    header('Location: login.view.php')
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
            <li><a href="cardapioDiaAdm.view.php">Cardápio Do Dia</a></li>
            <li><a class="active" href="calendarioAdm.view.php">Calendário</a></li>
            <li><a href="cadCardapioAdm.view.php">Cadastrar Cardápio</a></li>
            <li class="right"><a href="contatoAdm.view.php">Contato</a></li>
            <li class="right"><a href="login.view.php">Login</a></li>
        </ul>
    </nav>


    <br>

    <div class="flex-container">
        <picture>
            <source media="(min-width: 640px)" srcset="../assets/cal1.png">
            <img src="../assets/cal1.png" alt="Banner">
        </picture>
        <picture>
            <source media="(min-width: 640px)" srcset="../assets/cal2.png">
            <img src="../assets/cal2.png" alt="Banner">
        </picture>
        <picture>
            <source media="(min-width: 640px)" srcset="../assets/cal3.png">
            <img src="../assets/cal3.png" alt="Banner">
        </picture>
    </div>

    <hr>
    <br>

    <?php include ('../templates/footer.php') ?>

</html>