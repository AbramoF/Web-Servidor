<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <nmeta charset="utf-8"/>
    <title>abramo local</title>
</head>

<body>
        <h1> <?php echo ' metodo GET' ?> </h1>
    <form id="form1" name="nome" method="get" action="tabuada.php">
        <label for="numero">numero</label>
        <input type="text" name="numero" id="numero" value="4"/>
        Enviar
        <input type="submit" name="Enviar" id="Enviar" value="Enviar"/>     <!-- ver o que é esse *NAME* e *ID* e *VALUE*-->
</form> 
 

        <h1> <?php echo ' metodo POST' ?> </h1>
    <form id="form1" name="nome" method="post" action="tabuada2.php">
        <label for="numero">numero</label>
        <input type="text" name="numero" id="numero" value="2"/>
        Enviar
        <input type="submit" name="Enviar" id="Enviar" value="Enviar"/>     <!-- ver o que é esse *NAME* e *ID* e *VALUE*-->
</form> <!-- cada *<form>* é para um camnpo do form EU ACHO-->


</body>
</html>