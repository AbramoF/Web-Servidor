<!DOCTYPE html>

<html>

    <?php include ('../templates/header.php') ?>

    <picture>
        <source media="(min-width: 640px)" srcset="../assets/utfpr.png">
        <img src="../assets/utfpr.png" alt="Banner">
    </picture>

    <nav>
        <ul>
            <li><a class="active" href="cardapioDia.view.php">Cardápio Do Dia</a></li>
            <li><a href="calendario.view.php">Calendário</a></li>
            <?php
                session_start();
                if (isset($_SESSION['logado']) && $_SESSION['usuario'] == 'Administrador'){
            ?>
                <li><a href="cadCardapio.view.php">Cadastrar Cardápio</a></li>
                <li><a href="cadCalendario.view.php">Cadastrar Calendário</a></li>
            <?php
                }
            ?>
            <li class="right"><a href="contato.view.php">Contato</a></li>
            <?php
                if (isset($_SESSION['logado'])){
            ?>
                <li class="right"><a href="logado.view.php">Logout</a></li>
            <?php
                }
            ?>
            <?php
                if (empty($_SESSION['logado']) || $_SESSION['logado'] == false){
            ?>
                <li class="right"><a href="login.view.php">Login</a></li>
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
            <th>Sabádo</th>
        </tr>
        <tr>
            <td>11:00 - 14:00</td>
            <?php

            if (isset($_SESSION['array'])) {    //funcao para printar o a semana, mas nao esta funcionando porque nao consegui mexer muito bem com o array
                $array1 = $_SESSION['array'];
                foreach ($array1 as $array) {
                    foreach ($array as $indice) {
                        echo "<td>";
                        print_r($indice);
                        echo "<td>";
                    }
                }
            }


            ?>

        </tr>
        <tr>
            <td>17:30 - 20:30</td> <!-- printar a parte da noite -->
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>



    <br>
    <hr>
    <br>

    <?php include ('../templates/footer.php') ?>

</html>