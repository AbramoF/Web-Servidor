<!DOCTYPE html>

<html>

<head>
    <meta charset='utf-8'>
    <title>RU UTFPR</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../style.css'>
</head>

<body>

    <picture>
        <source media="(min-width: 640px)" srcset="../assets/utfpr.png">
        <img src="../assets/utfpr.png" alt="Banner">
        </picture>

    <nav>
        <ul>
            <li><a class="active" href="cardapioDia.view.php">Cardápio Do Dia</a></li>
            <li><a href="calendario.view.php">Calendário</a></li>
            <li class="right"><a href="contato.view.php">Contato</a></li>
            <li class="right"><a href="login.view.php">Login</a></li>
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

            if (isset($_SESSION['array'])) {          //funcao para printar o a semana, mas nao esta funcionando porque nao consegui mexer muito bem com o array
                $array1 = $_SESSION['array'];
                foreach ($array1 as $array) {
                    foreach ($array as $indice => $info) {
                        echo "<td>";
                        print_r($info);
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

    <footer>
        <address>
            UTFPR<BR>
            R. Doutor Washington Subtil Chueire, 330<br>
            Jardim Carvalho<br>
            Ponta Grossa<br>
            (42)4002-8922
        </address>
    </footer>

</body>

</html>