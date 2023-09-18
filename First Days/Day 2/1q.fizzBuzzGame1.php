<?php
	function isDevisibleBy($x, $divisor){
		return $x % $divisor == 0;
	}

	for ($x = 1; $x <= 100; $x++){
		if (!isDevisibleBy($x, 3) && !isDevisibleBy($x, 5))
			echo $x . "\n";
		if (isDevisibleBy($x, 3) && !isDevisibleBy($x, 5))
			echo "Fizz" . "\n";
		if (!isDevisibleBy($x, 3) && isDevisibleBy($x, 5))
			echo "Buzz" . "\n";
		if (isDevisibleBy($x, 3) && isDevisibleBy($x, 5))
			echo "FizzBuzz" . "\n";
	}
