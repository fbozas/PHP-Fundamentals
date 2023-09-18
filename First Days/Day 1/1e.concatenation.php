<?php
    // strings
    $x = "Hello ";
    $y = "World!";

    echo $x . $y;

    // numbers
    echo "\nnumber: " . 1 ."\n"; // This will work
    $a = 1;
    $b = 2;

    echo $a + $b;
    // echo $a . " + " . $b . " = " . $a + $b;   // This will not work  
    echo "\n" . strval($a) . " + " . strval($b) . " = " . strval($a + $b); 
    echo "\n{$a} + {$b} = " . strval($a + $b);