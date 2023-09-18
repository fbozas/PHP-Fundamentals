<?php
    $myArray=[];
    $response = "";
    echo "Give a number ";
    $element = (int)fgets(STDIN);
    array_push($myArray, $element);
    echo "Do you want to add another number? Y or N ";
    $response = trim(fgets(STDIN));
    while($response!="N"){
        echo "Give another number ";
        $element = (int)fgets(STDIN);
        array_push($myArray, $element);
        echo "Do you want to add another number? Y or N ";
        $response = trim(fgets(STDIN));
    }
    print_r($myArray);
    echo "The biggest number of the myArray is " . max($myArray) . "\n";
    //Program 2
    echo "The position of the biggest number in the myArray is " . array_search(max($myArray), $myArray);
