<?php
    echo "How old is he? ";
    $age = (int)fgets(STDIN);
    if ($age >= 13){
        if ($age  <= 18)  {
            echo "He is a teenager";
        }
        else{
            echo "He is not a teenager";
        }
    }
    else{
        echo "He is not a teenager";
    }

