<?php
	echo "A number ";
	$x = (int)fgets(STDIN);

	if(($x % 3  ==  0)){
		echo "Fizz" . "\n";
	}
	else{
		echo $x . "\n";
	} 

	for ($x = 1; $x <= 100; $x++){

		if(($x % 3) == 0){
			echo "Fizz" . "\n";
		}
		else{
			echo $x . "\n";
		} 
	}
	
