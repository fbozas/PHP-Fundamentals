<?php
    $myArray = [];
    echo "Give element ";
    $k = trim(fgets(STDIN));
    while($k!="stop"){
        array_push($myArray,$k);
        echo "Give element ";
        $k = trim(fgets(STDIN));
    }
    print_r($myArray);
