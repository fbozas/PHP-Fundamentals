<?php
	echo "What is your name? ";
	$name = trim(fgets(STDIN));
	if (strlen($name) <  4 )
		echo "You have a short name";
	else
		echo "You dont have a short name";
