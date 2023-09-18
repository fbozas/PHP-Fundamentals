<?php
    echo "Please give speed ";
    $u = (int)fgets(STDIN);
    if($u <= 0){
        echo "Only over 0 input is accepted";
    }
    else if($u >= 120){
        echo "The speed is to high";
    }
    else{
        $miles = $u*0.6214;
        echo "The speed into miles is: " . $miles;
    }
