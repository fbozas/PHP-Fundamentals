<?php
    $myArray = ["goat","bufallo","sheep","dog","cat"];


    for ($i = 0; $i < count($myArray); $i++){
        echo "{$myArray[$i]}\n";
    }  

    echo "---------------------\n";

    for ($i = 0; $i <= count($myArray); $i+=2){
        echo "{$myArray[$i]}\n";
    }

    echo "---------------------\n";
    // foreach
    foreach($myArray as $item){
        echo "{$item}\n";
    }
    