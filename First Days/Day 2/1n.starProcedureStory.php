<?php
    function lineVert(){
        for ($i = 0; $i < 10; $i++){
            echo "*" . "\n";
        }
    }

    function lineHorz(){
        $answer = "";
        for($i=0; $i < 10; $i++){
            $answer .= "*";
        }
        echo $answer . "\n";
    }

    echo "Example of two functions that does not return anything called from within the program" . "\n";
    lineVert();
    lineHorz();
