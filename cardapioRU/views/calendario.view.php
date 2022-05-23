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
                session_start();
                if (isset($_SESSION['logado']) && $_SESSION['usuario'] == 'Administrador'){
            ?>
                <li><a href="/CadCardapio">Cadastrar Cardápio</a></li>
                <li><a href="/CadCalendario">Cadastrar Cardápio</a></li>
                
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
        <iframe src="https://sei.utfpr.edu.br/sei/publicacoes/controlador_publicacoes.php?acao=publicacao_visualizar&id_documento=2735591&id_orgao_publicacao=0"></iframe>
    </div>

    <?php include ('templates/footer.php') ?>

</html>