<?php
	function stars($numberOfStars){
		$answer = "";
		for ($i = 0; $i < $numberOfStars; $i++){
			$answer .= "*";
		}
		return $answer;
	}

	echo stars(1) . "\n";
	echo stars(2) . "\n";
	echo stars(3) . "\n";
