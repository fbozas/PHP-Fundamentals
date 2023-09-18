<?php
    $arrayIntegers = [1, 2, 3, 4, 106, 2, 2, 2];
    $mymax = 0;

    for($i = 0; $i < count($arrayIntegers); $i++){
        if($arrayIntegers[$i] > $mymax){
            $mymax = $arrayIntegers[$i];
        }
    }
    
    echo $mymax;
