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
            <li><a class="active" href="calendario.view.php">Calendário</a></li>
            <li class="right"><a href="contato.view.php">Contato</a></li>
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

    <br>
    <hr>
    <br>

    <?php include ('../templates/footer.php') ?>

</html>