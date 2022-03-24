<?php
    $numberOne = 1000;
    $numberTwo = 2230;
    $numberThree = 1000;
    $middleNumber = 0;
    if(($numberOne>$numberTwo && $numberOne<$numberThree) || ($numberOne<$numberTwo && $numberOne>$numberThree)){
        $middleNumber = $numberOne;
    } 
    else if(($numberTwo>$numberOne && $numberTwo<$numberThree) || ($numberTwo<$numberOne && $numberTwo>$numberThree)){
        $middleNumber = $numberTwo;
    } 
    else if(($numberThree>$numberOne && $numberThree<$numberTwo) || ($numberThree<$numberOne && $numberThree>$numberTwo)){
        $middleNumber = $numberThree;
    }

    else{
        $middleNumber = "No hay valor medio";
    }

    echo $middleNumber;
?>