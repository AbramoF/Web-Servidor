<?php

session_start();

if (empty($_SESSION['logado']) || $_SESSION['logado'] == false)
    header('Location: /Login');
?>

<!DOCTYPE html>

<html>

    <?php include ('templates/header.php') ?>


    <picture>
        <source media="(min-width: 640px)" srcset="../assets/utfpr.png">
        <img src="../assets/utfpr.png" alt="Banner">

        <nav>
            <ul>
                <li><a href="/">Cardápio Do Dia</a></li>
                <li><a href="/Calendario">Calendário</a></li>
                <li><a class="active" href="/CadCardapio">Cadastrar Cardápio</a></li>
                <li><a href="/CadCalendario">Cadastrar Calendário</a></li>
                <li class="right"><a href="/Contato">Contato</a></li>
                <li class="right"><a href="/Logout">Logout</a></li>
            </ul>
        </nav>



        <div class="flex-container">
            <br>
            <form action="/" method="post">

                <br>

                <div>

                    Primeira opção de Salada:
                    <select name="sal1" title="sal1" required>

                        <option value="0">Alface</option>
                        <option value="1">Tomate</option>
                        <option value="2">Rúcula</option>
                        <option value="3">Cenoura</option>
                        <option value="4">Beterraba</option>

                    </select>
                </div>



                <div>

                    Segunda opção de Salada:
                    <select name="sal2" title="sal2" required>

                        <option value="0">Alface</option>
                        <option value="1">Tomate</option>
                        <option value="2">Rúcula</option>
                        <option value="3">Cenoura</option>
                        <option value="4">Beterraba</option>

                    </select>
                </div>



                <div>

                    Opção de Carne:
                    <select name="carn" title="carn" required>

                        <option value="0">Frango</option>
                        <option value="1">Carne Moída</option>
                        <option value="2">Bisteca</option>
                        <option value="3">Quibe</option>
                        <option value="4">Picadinho</option>

                    </select>
                </div>



                <div>

                    Opção de Vegetariana:
                    <select name="veg" title="veg" required>

                        <option value="0">Proteína de Soja</option>
                        <option value="1">Grão de Bico</option>
                        <option value="2">Ovo Frito</option>

                    </select>
                </div>



                <div>

                    Acompanhamento:
                    <select name="acomp" title="acomp" required>

                        <option value="0">Batata Salsa</option>
                        <option value="1">Vegetais Cozidos</option>
                        <option value="2">Macarrão</option>
                        <option value="3">Farofa</option>
                        <option value="4">Purê de Batata</option>

                    </select>
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

        <?php include ('templates/footer.php') ?>
</html>