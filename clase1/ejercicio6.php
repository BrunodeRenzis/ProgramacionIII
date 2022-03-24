<?php
    $array = array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10));
    $resultado = 0;
    $promedio = 0;

    $resultado = array_sum($array);
    $promedio = $resultado / count($array);
    echo "El resultado es ", $resultado, " y el promedio ", $promedio;
    if($promedio>=6){
        echo " es mayor que 6";
    } else{
        echo " no es mayor que 6";
    }
?>