<?

if (isset($_SESSION['array'])){
    $array = $_SESSION['array'];
    foreach ($array as $key) {
        for($x=1 ; $x<7 ; $x++){
            if($key->$dia==$x)
            echo "<td>$key->$carn</td>";
            
        }

    }
}
?>