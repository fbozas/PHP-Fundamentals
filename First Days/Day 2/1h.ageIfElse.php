<?php
    echo "How old are you? ";
    $age = (int)fgets(STDIN);
    if ($age  < 24 ) {
        echo "You are younger than me";
    }
    else{
        echo "You are older than me";
    }
	
