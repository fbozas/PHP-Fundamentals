<?php
    //Input with concatenation
    echo 'What is your name? ';
    $name = fgets(STDIN);
    echo 'Your name is : ' . $name;

    echo "What is your age " . $name . "? \n";
    $age = fgets(STDIN);
    echo "Your age is : " . $age;
