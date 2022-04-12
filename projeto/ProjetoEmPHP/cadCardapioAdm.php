<?php

session_start();

if(empty($_SESSION['logado']) || $_SESSION['logado']==false)
    header('Location: login.php')
?>


<!DOCTYPE html>

<html>

    <head>
        <meta charset='utf-8'>
        <title>RU UTFPR</title>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    </head>
    <body>
    

            <picture>
                <source media="(min-width: 640px)" srcset="utfpr.png" > <!--banner grande-->
                <img src="utfpr.png" alt="Banner"> <!--banner peq-->


    <nav>
        <ul>
            <li><a href="cardapioDiaAdm.php">Cardápio Do Dia</a></li>
            <li><a href="calendarioAdm.php">Calendário</a></li>
            <li ><a class="active" href="cadCardapioAdm.php">Cadastrar Cardápio</a></li>
            <li class="right"><a href="contatoAdm.php">Contato</a></li>
            <li class="right"><a href="login.php">Login</a></li>
        </ul>
    </nav>


    
    <div class="flex-container">
    <br>
    <form action="/cadastro.php" method="post">
        <div>
            <label for="arroz">Arroz </label>
            <input type="checkbox" id="arroz" nome="arroz" checked>
        </div>
    <br>
        <div>
            <label for="arrozIntegral">Arroz Integral</label>
            <input type="checkbox" id="arrozInt" name="arrozIntegral" title="arroz integral" checked>
        </div>
    <br>
        <div>
            <label for="macarrao"> Macarrão </label>
            <input type="checkbox" id="maca" name="macarrao" title="macarrao">
        </div>
         
       <br>
        
        <div>
            <label for="sal1">Primeira opção de salada : </label>
            <input type="text" id="sal1" name="salada1" required placeholder="Primeira opção de salada...">
        </div>
            
       
        
        <div>
            <label for="sal2">Segunda opção de salada : </label>
            <input type="text" id="sal2" name="salada2" required placeholder="Segunda opção de salada...">
        </div>
            
      

        <div>
            <label for="carn">Carne : </label>
            <input type="text" id="carn" name="carnivoro" required placeholder="Carne do dia...">
        </div>
            
        

        <div>
            <label for="veg">Opção vegetariana : </label>
            <input type="text" id="veg" name="vegetariano" required placeholder="Opção vegetariana...">
        </div>
            
       

        <div>
            <label for="acomp"></label>Acompanhamento : </label>
            <input type="text" id="acomp" name="acompanhamento" required placeholder="Opção acompanhamento...">
        </div>
            
     

        <div>

            Horario: 
            <select name="horario" title="horario" required>
                <option value="almoco">Almoço 11:00-14:00</option>
                <option value="janta">Jantar 17:30-20:30</option>
            </select>
        </div>

        <div>

            Dia da semana: 
            <select name="dia" title="dia" required>
                <option value="segunda">Segunda-feira</option>
                <option value="terca">Terça-feira</option>
                <option value="quarta">Quarta-feira</option>
                <option value="quinta">Quinta-feira</option>
                <option value="sexta">Sexta-feira</option>
                <option value="sabado">Sábado</option>
            </select>
        </div>

<br>
            
        <input type="submit" value="Submit">
    </form>
</div>


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