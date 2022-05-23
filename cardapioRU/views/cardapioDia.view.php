<!DOCTYPE html>

<html>

    <?php include ('templates/header.php') ?>

    <picture>
        <source media="(min-width: 640px)" srcset="../assets/utfpr.png">
        <img src="../assets/utfpr.png" alt="Banner">
    </picture>

    <nav>
        <ul>
            <li><a class="active" href="/">Cardápio Do Dia</a></li>
            <li><a href="/Calendario">Calendário</a></li>
            <?php
                if (!(session_status() === PHP_SESSION_ACTIVE)){
                    session_start();
                }
                if (isset($_SESSION['logado']) && $_SESSION['usuario'] == 'Administrador'){
            ?>
                <li><a href="/CadCardapio">Cadastrar Cardápio</a></li>
                <li><a href="/CadCalendario">Cadastrar Calendário</a></li>
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
    <br>


    <h1>Cardápio Da Semana</h1> <!-- Table para colocar o menu da semana -->
    <table>
        <tr class="head">
            <th>Horário</th>
            <th>Segunda-feira</th>
            <th>Terça-feira</th>
            <th>Quarta-feira</th>
            <th>Quinta-feira</th>
            <th>Sexta-feira</th>
        </tr>
        <tr>
            <td>11:00 - 14:00</td>
            <td>
                <?php 
                    foreach($sm as $yuta){
                        echo $yuta->refeicao;
                        echo nl2br("\n");
                    } 
                ?>
            </td> <!-- Segunda Feira - Almoço -->

            <td>
                <?php 
                    foreach($tm as $yuta){
                    echo $yuta->refeicao;
                    echo nl2br("\n");
                    } 
                ?>
            </td> <!-- Terça Feira - Almoço -->

            <td>
                <?php 
                    foreach($qam as $yuta){
                    echo $yuta->refeicao;
                    echo nl2br("\n");
                    } 
                ?>
            </td> <!-- Quarta Feira - Almoço -->

            <td>
                <?php 
                    foreach($qim as $yuta){
                    echo $yuta->refeicao;
                    echo nl2br("\n");
                    } 
                ?>
            </td> <!-- Quinta Feira - Almoço -->

            <td>
                <?php 
                    foreach($sem as $yuta){
                    echo $yuta->refeicao;
                    echo nl2br("\n");
                    } 
                ?>
            </td> <!-- Sexta Feira - Almoço -->
        </tr>
        
        <tr>
            <td>17:30 - 20:30</td> <!-- printar a parte da noite -->
            <td>
                <?php 
                    foreach($st as $yuta){
                    echo $yuta->refeicao;
                    echo nl2br("\n");
                    } 
                ?>
            </td> <!-- Segunda Feira - Jantar -->

            <td>
                <?php 
                    foreach($tt as $yuta){
                    echo $yuta->refeicao;
                    echo nl2br("\n");
                    } 
                ?>
            </td> <!-- Terça Feira - Jantar -->

            <td>
                <?php 
                    foreach($qat as $yuta){
                    echo $yuta->refeicao;
                    echo nl2br("\n");
                    } 
                ?>
            </td> <!-- Quarta Feira - Jantar -->

            <td>
                <?php 
                    foreach($qit as $yuta){
                    echo $yuta->refeicao;
                    echo nl2br("\n");
                    } 
                ?>
            </td> <!-- Quinta Feira - Jantar -->

            <td>
                <?php 
                    foreach($set as $yuta){
                    echo $yuta->refeicao;
                    echo nl2br("\n");
                    } 
                ?>
            </td> <!-- Sexta Feira - Jantar -->
        </tr>

    </table>


    <?php include ('templates/footer.php') ?>

</html>