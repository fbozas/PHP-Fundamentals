<?php
    function isDevisibleBy($x, $divisor){
        return $x % $divisor == 0;
    }

    // print isDevisibleBy(6,3);

    for($i = 1; $i <= 100; $i++){

        if(isDevisibleBy($i, 3)){
            if(isDevisibleBy($i, 5)){
                echo "FizzBuzz" . "\n";
            }
            else{
                echo "Fizz" . "\n";
            }
        }
        else{
            if(isDevisibleBy($i, 5)){
                echo "Buzz" . "\n";
            }
            else{
                echo $i . "\n";
            }
        }
            
    }
	
