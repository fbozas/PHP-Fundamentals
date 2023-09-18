<?php
    //data type 1
    $a = 5;
    $b = 4.6;
    $c = "George";
    $d = true;
    $e = "5";


    echo "a's datatype is: integer and it's value is: {$a} \n";
    echo "b's datatype is: float and it's value is:  {$b} \n";
    echo "c's datatype is: string and it's value is:  {$c} \n";
    echo "d's datatype is: boolean and it's value is:  {$d} \n";


    //advanced (getting the datatype from a variable)
    echo "a's datatype is: " . getType($a) . "\n";
    echo "b's datatype is: " . getType($b) . "\n";
    echo "c's datatype is: " . getType($c) . "\n";
    echo "d's datatype is: " . getType($d) . "\n";

    // casting    
    echo "e's datatype is: " . getType($e) . "\n";
    echo "a's datatype after casting is: " . getType((string)$a) . "\n";