<?php

session_start();

if(empty($_SESSION['logado']) || $_SESSION['logado']==false){
    header('Location: ../view/login.php');
}
else{

$repetido=false;
    

    //print_r($_POST); die();
    if(!empty($_POST['carn']) && !empty($_POST['veg'])){
           
        $sal1 = $_POST['sal1'];
        $sal2 = $_POST['sal2'];
        $carn = $_POST['carn'];
        $veg = $_POST['veg'];
        $acomp = $_POST['acompa'];
        $dia = $_POST['dia'];
    
        $cardapio=[
        'sal1'=>$sal1,
        'sal2'=>$sal2,
        'carn'=>$carn,
        'veg'=>$veg,
        'acomp'=>$acomp,
        'dia'=>$dia
        ];


        $array[] = $_SESSION['array'];
        if($array)
        foreach($array as $key){
            for($x=1 ; $x<13 ; $x++){
                if($cardapio->$dia==$x){
                    if($key->$dia==$x){
                if($cardapio->dia==$x){
                    if($key->dia==$x){
                        $_SESSION['erro']=20;
                        $repetido=1;
                    }
                }            
            } 
        }
}}
else{
    array_push($array, $cardapio);
    $_SESSION['array'] = $array;
}



if($repetido!=true)
array_push($array, $cardapio);

$_SESSION['array'] = $array;
header("Location: ../view/cadCardapioAdm.php");
}
//implementar o erro se nao tem todos os dados necesssarios
}

?>