<?php
    echo "What is your name? ";
    $name = fgets(STDIN);
    echo "Your name is : {$name} ";

    $name = trim($name);
    echo "What is your age {$name}? ";

    $age = fgets(STDIN);
    echo "Your age is : {$age}";

    $age = (int)$age;
    echo "Next year you will be " . ($age + 1) . "\n";

    $trueOrFalse = $age > 12;
    echo "{$name} is older than 12 is {$trueOrFalse}";
