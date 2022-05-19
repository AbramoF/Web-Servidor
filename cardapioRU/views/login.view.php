
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
            <li class="right"><a href="/Contato">Contato</a></li>
            <li class="right"><a class="active" href="/Login">Login</a></li>
        </ul>
    </nav>

    <br>
    <div style="max-width: 40%">
            <?php if ($erro):?>
                <div style="background: #fafae1; padding: 15px; margin-bottom: 24px;">
                        <strong>Usuário ou Senha inválidos! Tente novamente.</strong>
                <div>
            <?php endif; ?>
        <form class="box-login" action="/LoginUser" method="POST">

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


    <?php include ('templates/footer.php') ?>

</html>