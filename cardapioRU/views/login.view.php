<?php
$usuario = $_POST['loginUser'] ?? '';
$senha = $_POST['loginSenha'] ?? '';
$erro = false;

session_start();

// checar se as credenciais do usuario estão ok
if ($usuario == 'admin' && $senha == 'qwe123') {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = 'Administrador';
    $_SESSION['erro'] = false;
}else if(!empty($_POST)){
    $erro=true;
}

//Checar se o usuário já está logado
if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
    header('Location: cardapioDia.view.php');
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
            <?php if ($erro):?>
                <div style="background: #fafae1; padding: 15px; margin-bottom: 24px;">
                        <strong>Usuário ou Senha inválidos! Tente novamente.</strong>
                <div>
            <?php endif; ?>
        <form class="box-login" action="login.view.php" method="POST">

            <label for="login">Usuário : </label>
            <input type="text" id="username" name="loginUser" required placeholder="Digite seu usuário...">

            <label for="login">Senha : </label>
            <input type="password" id="password" name="loginSenha" required placeholder="Digite sua senha...">
            <div class="button">
                <input class="submit-button" type="submit" value="Login">
            </div>
        </form>
    </div>

    <br>
    <hr>
    <br>


    <?php include ('../templates/footer.php') ?>

</html>