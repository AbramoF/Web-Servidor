<?php
$linkcalendario = $_POST['linkcalendario'] ?? '';
session_start();

if (empty($_SESSION['logado']) || $_SESSION['logado'] == false){
    header('Location: /Login');
    
}

?>

<!DOCTYPE html>

<html>

    <?php include ('templates/header.php') ?>


    <picture>
        <source media="(min-width: 640px)" srcset="../assets/utfpr.png">
        <img src="../assets/utfpr.png" alt="Banner">


        <nav>
            <ul>
                <li><a href="/">Cardápio Do Dia</a></li>
                <li><a href="/Calendario">Calendário</a></li>
                <li><a href="/CadCardapio">Cadastrar Cardápio</a></li>
                <li><a class="active" href="/CadCalendario">Cadastrar Calendário</a></li>
                <li class="right"><a href="/Contato">Contato</a></li>
                <li class="right"><a href="/Logout">Logout</a></li>
            </ul>
        </nav>



        <div class="flex-container">
            <br>
            <form action="/CadCalendario" method="POST">
                
                <input type="link" id="link" name="linkcalendario" required placeholder="Digite o link do calendário Novo...">
                
                <div class="button">
                    <input class="submit-button" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <br>
        <hr>
        <br>

        <?php include ('templates/footer.php') ?>
</html>