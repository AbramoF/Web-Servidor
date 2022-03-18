<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="utf-8"/>
    <title>abramo local</title>
</head>
<body>
<?php

echo '<h1>IMC ' . $_POST["nome"] .'</h1>';
if(isset($_POST["peso"]) && isset($_POST["idade"])){
    $n=$_POST["peso"];
    $y=$_POST["idade"];
    $s=$n/$y;
    echo "<h2> $n/$y=$s </h2>";
}else

?>

<a href="calculoIMC.html"> Novo Calculo</a> <!-- *REFERENCIA* -->
</body>

</html>