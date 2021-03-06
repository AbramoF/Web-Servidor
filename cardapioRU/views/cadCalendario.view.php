<!DOCTYPE html>

<html>

    <?php include ('templates/header.php') ?>


    <picture>
        <source media="(min-width: 640px)" srcset="../assets/utfpr.png">
        <img src="../assets/utfpr.png" alt="Banner">


        <nav>
            <ul>
                <li><a href="/">Cardápio Do Dia</a></li>
                <li><a href="/calendario">Calendário</a></li>
                <li><a href="/cadCardapio">Cadastrar Cardápio</a></li>
                <li><a class="active" href="/cadCalendario">Cadastrar Calendário</a></li>
                <li class="right"><a href="/contato">Contato</a></li>
                <li class="right"><a href="/logout">Logout</a></li>
            </ul>
        </nav>



        <div class="flex-container">
            <br>
            <form action="/sendCalendario" method="POST">
                <div>
                    Insira o Link do Novo Calendário:
                </div>
                <input type="link" name="linkcalendario" required placeholder="Digite o link do calendário Novo...">
                
                <div class="button">
                    <input class="submit-button" type="submit" value="Enviar">
                </div>
            </form>
        </div>

        <?php include ('templates/footer.php') ?>
</html>