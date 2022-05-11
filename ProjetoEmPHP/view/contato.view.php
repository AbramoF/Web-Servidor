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
            <li class="right"><a class="active" href="contato.view.php">Contato</a></li>
            <li class="right"><a href="login.view.php">Login</a></li>
        </ul>
    </nav>
    <br>

    <div> Entre em contato conosco! Qualquer duvida, sugestão ou reclamação!</div>
    <div> Através do número (42)4002-8922.</div>
    <div>SAC 08001234114.</div>
    <br>
    <hr>
    <br>

    <?php include ('../templates/footer.php') ?>
    
</html>