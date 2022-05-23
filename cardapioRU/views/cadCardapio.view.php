<?php
if (!(session_status() === PHP_SESSION_ACTIVE)){
    session_start();
}
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
                <?php
                if (isset($_SESSION['logado']) && $_SESSION['usuario'] == 'Administrador'){
            ?>
                <li><a href="/CadCalendario">Cadastrar Calendário</a></li>
                
            <?php
                }
            ?>
                <li class="right"><a href="/Contato">Contato</a></li>
                <li class="right"><a href="/Logout">Logout</a></li>
            </ul>
        </nav>



        <div class="flex-container">
            <br>
            <form action="/SendCardapio" method="POST">

                <br>

                <div>

                    Primeira opção de Salada:
                    <select name="sal1" title="sal1" required>

                        <option value="Alface">Alface</option>
                        <option value="Tomate">Tomate</option>
                        <option value="Rúcula">Rúcula</option>
                        <option value="Cenoura">Cenoura</option>
                        <option value="Beterraba">Beterraba</option>

                    </select>
                </div>



                <div>

                    Segunda opção de Salada:
                    <select name="sal2" title="sal2" required>

                        <option value="Alface">Alface</option>
                        <option value="Tomate">Tomate</option>
                        <option value="Rúcula">Rúcula</option>
                        <option value="Cenoura">Cenoura</option>
                        <option value="Beterraba">Beterraba</option>

                    </select>
                </div>



                <div>

                    Opção de Carne:
                    <select name="carn" title="carn" required>

                        <option value="Frango">Frango</option>
                        <option value="Carne Moída">Carne Moída</option>
                        <option value="Bisteca">Bisteca</option>
                        <option value="Quibe">Quibe</option>
                        <option value="Picadinho">Picadinho</option>

                    </select>
                </div>



                <div>

                    Opção de Vegetariana:
                    <select name="veg" title="veg" required>

                        <option value="Proteina de Soja">Proteína de Soja</option>
                        <option value="Grão de Bico">Grão de Bico</option>
                        <option value="Ovo Frito">Ovo Frito</option>

                    </select>
                </div>



                <div>

                    Acompanhamento:
                    <select name="acomp" title="acomp" required>

                        <option value="Batata Salsa">Batata Salsa</option>
                        <option value="Vegetais Cozidos">Vegetais Cozidos</option>
                        <option value="Macarrão">Macarrão</option>
                        <option value="Farofa">Farofa</option>
                        <option value="Purê de Batata">Purê de Batata</option>

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