<?php
    // Step 1 (just use the 2 commands)
    echo 1 + 1;
    print 1 + 1;

    // Step 2
    // if we want to put line breaks we should use \n
    echo "\nStep 2 \n";
    $a = 1;
    $b = 2;
    // print $a," ", $b; print cannot take multiple parameters
    echo $a," ",$b; // while echo does

    // Finally echo is faster than print so we will use only echo