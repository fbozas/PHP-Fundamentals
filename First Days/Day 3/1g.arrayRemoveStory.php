<?php
    $myArray = ["cat","dog","turtle","horse","rabbit","cat"];
    print_r($myArray);

    for($i = 0; $i < count($myArray); $i++){
        if($myArray[$i] == "cat"){
            array_splice($myArray,$i,1);
        }
    }
    print_r($myArray);
