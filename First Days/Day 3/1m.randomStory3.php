<?php
    $myAge = rand(1,80);  

    echo "The age that has been selected from the system is: {$myAge} \n";

    if($myAge > 16){
        echo "Please purchase the adult ticket\n";
    }
    else{
        echo "Please purchase the child ticket\n";
    }
