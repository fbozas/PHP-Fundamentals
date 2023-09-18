<?php
    //This is with while way
    $lionsToday = 23000;
    $reductionPercentage = 2/100;
    $yearsFromToday = 0;
    while($lionsToday > 6000){
        $lionsToday = $lionsToday - $lionsToday * $reductionPercentage;
        $yearsFromToday = $yearsFromToday + 1;
    }

    echo "Today lions are 23000 \n";
    echo "After {$yearsFromToday} years lions will be one of endangered species \n";

    //This is with for humans
    $humansToday = 7500000000;
    $reductionPercentage = 2/100;
    $yearsFromToday = 0;
    while ($humansToday > 6000){
        $humansToday = $humansToday - $humansToday * $reductionPercentage;
        $yearsFromToday = $yearsFromToday + 1;
    }

    echo "Today humans are 7500000000 \n";
    echo "After {$yearsFromToday} years people will be one of endangered species \n";

    // //This is with for humans
    $humansToday = 7500000000;
    $increasePercentage = 2/100;
    $yearsFromToday = 0;
    while ($yearsFromToday < 67){
        $humansToday = $humansToday + $humansToday * $reductionPercentage;
        $yearsFromToday = $yearsFromToday + 1;
    }
    $humansToday = $humansToday;
    echo "Today humans are 7500000000 \n";
    echo "After {$yearsFromToday} years the international population will be {$humansToday} \n";

