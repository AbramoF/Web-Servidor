<?php



//print_r($_POST); die();
if(!empty($_POST['carn']) && !empty($_POST['veg'])){
        
if(!empty($_SESSION['array']))
//UM IF SE O CARDAPIO JA TIVER UM NO MESMO DIA


$cardapio=[
    $sal1 = $_POST['sal1'],
    $sal2 = $_POST['sal2'],
    $carn = $_POST['carn'],
    $veg = $_POST['veg'],
    $acomp = $_POST['acompa'],
    $dia = $_POST['horario']
];


    $array = $_SESSION['array'];
    foreach($array as $key){
        for($x=1 ; $x<13 ; $x++){
            if($cardapio->dia==$x){
                if($key->dia==$x){
                    $_SESSION['erro']=20;
                    $repetido=1;
                }
            }            
        } 
    }
    if($repetido!=1)
        array_push($array,$cardapio);
    //print_r($usuario1);

    //print_r($array); die();
    $_SESSION['array'] = $array;

    header("Location: ../view/login.php");
}
?>