<?php
    //Version 1
    print "Give a number ";
    $number1 = (int)fgets(STDIN);
    if ($number1  >= 0)
        if ($number1 == 0)
                echo "The number is zero \n";
        else 
                echo "You gave a positive number \n";
    else
        echo "You gave a negative number \n";
            
    //Version 2
    echo "Give a number ";
    $number2 = (int)fgets(STDIN);
    if ($number2  > 0)
        echo "You gave a positive number \n";
        
    else if ($number2  < 0)
        echo "You gave a negative number \n";
    else
        echo "The number is zero \n";
        
