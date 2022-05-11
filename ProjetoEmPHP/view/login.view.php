<?php
$usuario = $_POST['loginUser'] ?? '';
$senha = $_POST['loginSenha'] ?? '';
$erro = 0;


session_start();

// checar se as credenciais do usuario estão ok
if ($usuario == 'admin' && $senha == 'qwe123') {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = 'Administrador';
    $_SESSION['erro'] = 0;

    header('Location: logado.view.php');
}

//Checar se o usuário já está logado
if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
    header('Location: logado.view.php');
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
            <li class="right"><a href="contato.view.php">Contato</a></li>
            <li class="right"><a class="active" href="login.view.php">Login</a></li>
        </ul>
    </nav>

    <br>
    <div style="max-width: 40%">
        <form class="box-login" action="login.view.php" method="post">

            <label for="login">Usuário : </label>
            <input type="text" id="username" name="loginUser" required placeholder="Digite seu usuário...">

            <label for="login">Senha : </label>
            <input type="password" id="password" name="loginSenha" required placeholder="Digite sua senha...">
            <div class="button">
                <input class="submit-button" type="submit" value="Submit">
            </div>
        </form>
    </div>

    <br>
    <hr>
    <br>

    <?php
    if (!isset($_SESSION['array'])) { //verifica se ja existe o array onde vao ficar armazenado as refeicoes
        $array = [];
    } else {
        $array = $_SESSION['array'];
    }
    ?>

    <?php include ('../templates/footer.php') ?>

</html>