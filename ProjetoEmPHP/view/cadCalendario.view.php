<?php
$linkcalendario = $_POST['linkcalendario'] ?? '';
echo $linkcalendario;
session_start();

if (empty($_SESSION['logado']) || $_SESSION['logado'] == false){
    header('Location: login.view.php');
    
}

?>

<!DOCTYPE html>

<html>

    <?php include ('../templates/header.php') ?>


    <picture>
        <source media="(min-width: 640px)" srcset="../assets/utfpr.png">
        <img src="../assets/utfpr.png" alt="Banner">


        <nav>
            <ul>
                <li><a href="cardapioDia.view.php">Cardápio Do Dia</a></li>
                <li><a href="calendario.view.php">Calendário</a></li>
                <li><a href="cadCardapio.view.php">Cadastrar Cardápio</a></li>
                <li><a class="active" href="cadCalendario.view.php">Cadastrar Calendário</a></li>
                <li class="right"><a href="contato.view.php">Contato</a></li>
                <li class="right"><a href="logado.view.php">Logout</a></li>
            </ul>
        </nav>



        <div class="flex-container">
            <br>
            <form action="cadCalendario.view.php" method="POST">
                
                <input type="link" id="link" name="linkcalendario" required placeholder="Digite o link do calendário Novo...">
                
                <div class="button">
                    <input class="submit-button" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <br>
        <hr>
        <br>

        <?php include ('../templates/footer.php') ?>
</html>