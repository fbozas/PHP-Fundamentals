<?php
    echo "Give speed ";
    $u = (int)fgets(STDIN);
    if($u <= 0){
        echo "Speed's value should be positive \n";
    }
    else{
        while($u >= 120){
            echo "Speed is too high \n";
            echo "Give speed again \n";
            $u = (int)fgets(STDIN);
        }
        $miles = $u*0.6214;
        echo "The speed into miles is: " . $miles;
    }    
