<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="utf-8"/>
    <title>abramo local</title>
</head>
<body>
<?php

if(isset($_GET["numero"])){
    $n=$_GET["numero"];

    for ($i=0; $i < 10; $i++) { 
         echo '<h1>'."$i * $n = ".($i*$n).'</h1>';
    }
}
}
?>

<a href="get.php"> Tabuada</a> <!-- *REFERENCIA* -->
</body>

</html>