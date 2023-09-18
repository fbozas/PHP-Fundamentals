<?php
    // In javascript we have arrays only and not lists
    $pets = ["cat","dog","turtle","fish","parrot","lizzard","rabbit","hamster","canary"];
    print_r($pets);

    //How would you reference the “lizard”?
    echo $pets[5] . "\n";

    // //How would you sort the array?
    sort($pets);
    print_r($pets);

    array_splice($pets,4,0,"python");
    print_r($pets);
    echo array_search("fish",$pets);
