<?php
    function askForUserInputs($sideName){
        echo "Give {$sideName} ";
        $s = (int)fgets(STDIN);
        return $s;
    }

    function rectangleArea($side1,$side2){
        $area = $side1 * $side2;
        return $area;
    }

    $side1 = askForUserInputs("Height");
    $side2 = askForUserInputs("Length");

    echo rectangleArea($side1,$side2);    
