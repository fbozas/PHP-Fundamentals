<?php
    echo "How old is he? ";
    $age = fgets(STDIN);
    if($age > 65 && $age < 70){
        echo "He's a teenager";
    }
    else{
        echo "He's not a teenager";
    }

    //Condition needs to be -> if age > 13 and age < 19:
