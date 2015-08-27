
<?php

if ( isset( $_POST['consultar'] ) ){

    $populacao = $_POST['populacao'];
    $fixa1 = 0.25;
    $confiab = $_POST['confiabilidade'];


    if($confiab == 1){
        $confiab2 = 2.57;
        $confiab = 2.57 * 2.57;
    }

    elseif ($confiab == 2){
        $confiab2 = 1.96;
        $confiab = 1.96 * 1.96;
    }
    elseif($confiab == 3){
        $confiab2= 1.64;
        $confiab = 1.64 * 1.64;

    }else {
        $confiab2 = $confiab;
        $confiab = $confiab * $confiab;

    }

    $erro = $_POST['erro'];
    $erro1 = $erro /100;
    $erroResult = $erro1 * $erro1 ;
    $dividendo = $populacao * $fixa1 * $confiab;
    $populacao2 = $populacao - 1;
    $divisor = $fixa1 * $confiab + $populacao2 * $erroResult;
    $result = $dividendo / $divisor;



    $result = ceil($result);

}
?>