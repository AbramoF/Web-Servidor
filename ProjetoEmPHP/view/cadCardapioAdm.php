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
        <link rel='stylesheet' type='text/css' media='screen' href='../main.css'>
    </head>
    <body>
    

            <picture>
                <source media="(min-width: 640px)" srcset="../assets/utfpr.png" > <!--banner grande-->
                <img src="../assets/utfpr.png" alt="Banner"> <!--banner peq-->


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
    <form action="..\control\cadastro.control.php" method="post">

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
            <label for="carn">Opção carnívora : </label>
            <input type="text" id="carn" name="carn" required placeholder="Opção carnívora...">
        </div>
            
        

        <div>
            <label for="veg">Opção vegetariana : </label>
            <input type="text" id="veg" name="veg" required placeholder="Opção vegetariana...">
        </div>
            
       

        <div>
            <label for="acomp"></label>Acompanhamento : </label>
            <input type="text" id="acomp" name="acompa" required placeholder="Opção acompanhamento...">
        </div>
            
        
        
        <div>

            Dia da semana: 
            <select name="dia" title="dia" required>
                <option value="1">Segunda-feira - Almoço</option>
                <option value="2">Segunda-feira - Janta</option>

                <option value="3">Terça-feira - Almoço</option>
                <option value="4">Terça-feira - Janta</option>

                <option value="5">Quarta-feira - Almoço</option>
                <option value="6">Quarta-feira - Janta</option>

                <option value="7">Quinta-feira - Almoço</option>
                <option value="8">Quinta-feira - Janta</option>

                <option value="9">Sexta-feira - Almoço</option>
                <option value="10">Sexta-feira - Janta</option>

                <option value="11">Sábado - Almoço</option>
                <option value="12">Sábado - Janta</option>
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