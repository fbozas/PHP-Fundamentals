<?php
    print "Give your name\n";
    $name = trim(fgets(STDIN));
    print "Give your age\n";
    $age = (int)trim(fgets(STDIN));

    while($age < 0){
        print "The age should be positive\n";
        print "Give your age\n";
        $age = (int)trim(fgets(STDIN));
    }
        
    print "Give your weight\n";
    $weight = (int)trim(fgets(STDIN));
    while($weight < 0){
        print "The weight should be positive\n";
        print "Give your weight\n";
        $weight = (int)trim(fgets(STDIN));
    }
        
    $colors = ["White","Pink","Red","Green","Blue","Black"];
    $shirtSizes = ["Small","Medium","Large","X-Large"];

    $userColor = "";
    $userShirtSize = "";


    if($age >= 0 && $age <= 17)
        $userColor = $colors[0];
    else if($age > 17 && $age <= 24)
        $userColor = $colors[1];
    else if($age > 24 && $age <= 35)
        $userColor = $colors[2];
    else if($age > 35 && $age <= 45)
        $userColor = $colors[3];
    else if($age > 45 && $age <= 55)
        $userColor = $colors[4];
    else
        $userColor = $colors[5];

    if($weight <= 50)
        $userShirtSize = $shirtSizes[0];
    else if($weight > 50 && $weight <= 64)
        $userShirtSize = $shirtSizes[1];
    else if($weight >= 65 && $weight <= 79)
        $userShirtSize = $shirtSizes[2];
    else
       $userShirtSize = $shirtSizes[3];
        
    print "Hey {$name}, it is cool to be {$age} years old! You should buy a {$userColor} {$userShirtSize} shirt";
