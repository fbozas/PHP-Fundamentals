<?php
    $fruits = ["apple", "pear", "banana", "grapefruit"];
    $randomKey = array_rand($fruits);
    echo $randomKey . "\n";
    echo $fruits[$randomKey];