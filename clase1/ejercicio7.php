<?php
    $arrayImpares = array();
    for($i=0; ; $i++){
        if($i%2!=0 && count($arrayImpares)<10){
            array_push($arrayImpares,$i);
        } else if(count($arrayImpares)>9){
            break;
        }
    }
    var_dump($arrayImpares);

    foreach ($arrayImpares as $value) {
        echo "<br/>";
        echo $value . "<br/>";
    }
    $counter = 0;
    do{
        echo "<br/>";
        echo $arrayImpares[$counter] . "<br/>";
        $counter++;
    
    }while($counter < count($arrayImpares));
    
?>