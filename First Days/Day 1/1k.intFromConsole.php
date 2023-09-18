<?php
    //Input with concatenation
    echo 'What is your name? ';
    $name = fgets(STDIN);
    echo 'Your name is : ' . $name;

    echo "What is your age " . $name . "? ";
    $age = (int)fgets(STDIN);
    echo "Your age is : " . $age . "\n";

    //If we try to input a number from prompt it is read as string
    echo "Next year you will be  " . ($age + 1);
