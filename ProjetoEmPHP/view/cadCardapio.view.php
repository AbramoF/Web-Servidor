<?php

session_start();

if (empty($_SESSION['logado']) || $_SESSION['logado'] == false)
    header('Location: login.view.php')
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
                <li><a class="active" href="cadCardapio.view.php">Cadastrar Cardápio</a></li>
                <li><a href="cadCalendario.view.php">Cadastrar Calendário</a></li>
                <li class="right"><a href="contato.view.php">Contato</a></li>
                <li class="right"><a href="logado.view.php">Logout</a></li>
            </ul>
        </nav>



        <div class="flex-container">
            <br>
            <form action="..\controller\cadCardapio.controller.php" method="post">

                <br>

                <div>
                    <label for="sal1">Primeira opção de salada : </label>
                    <input type="text" id="sal1" name="sal1" required placeholder="Primeira opção de salada...">
                </div>



                <div>
                    <label for="sal2">Segunda opção de salada : </label>
                    <input type="text" id="sal2" name="sal2" required placeholder="Segunda opção de salada...">
                </div>



                <div>
                    <label for="carn">Carne do dia : </label>
                    <input type="text" id="carn" name="carn" required placeholder="Opção de carne...">
                </div>



                <div>
                    <label for="veg">Opção Vegetariana : </label>
                    <input type="text" id="veg" name="veg" required placeholder="Opção vegetariana...">
                </div>



                <div>
                    <label for="acomp"></label>Acompanhamento : </label>
                    <input type="text" id="acomp" name="acompa" required placeholder="Opção acompanhamento...">
                </div>



                <div>

                    Dia da semana:
                    <select name="dia" title="dia" required>

                        <option value="0">Segunda-feira - Almoço</option>
                        <option value="1">Terça-feira - Almoço</option>
                        <option value="2">Quarta-feira - Almoço</option>
                        <option value="3">Quinta-feira - Almoço</option>
                        <option value="4">Sexta-feira - Almoço</option>
                        
                        <option disabled="disabled" value="10">-------------------------------</option>

                        <option value="5">Segunda-feira - Jantar</option>
                        <option value="6">Terça-feira - Jantar</option>
                        <option value="7">Quarta-feira - Jantar</option>
                        <option value="8">Quinta-feira - Jantar</option>
                        <option value="9">Sexta-feira - Jantar</option>

                    </select>
                </div>

                <br>

                <input type="submit" value="Submit">
            </form>
        </div>


        <br>
        <hr>
        <br>

        <?php include ('../templates/footer.php') ?>
</html>