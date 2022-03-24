<?php 
    $acumulador = 0;
    for($i=1; ; $i++){
        $acumulador+=$i;
        if($acumulador+$i>=1000){
            break;
        }
    }
    echo "El acumulador suma: ", $acumulador;
?>