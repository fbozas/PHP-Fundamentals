<?php
    //Find out if a name could be read from the opposite

    echo "Give a string ";
    $name = trim(fgets(STDIN));

    function palindrome($name){
        $myArray = [];
        $name = str_split($name);
        for ($i = 0; $i < count($name); $i++) {
            $char = $name[$i];
            array_push($myArray,$char);
        }
        
        $myArray3 = array_slice($myArray,0);
        $myArray3 = array_reverse($myArray3);
        print_r($myArray);
        print_r($myArray3);
        if($myArray ===  $myArray3){
            
            return true;
        }
        return false;
    }

    $result =palindrome($name);
    echo $result;
