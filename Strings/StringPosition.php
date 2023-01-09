<?php

	//find the string position

	$someText = "My name is Jovana";
	$findTextWord = "Jovana";
	$position = stripos($someText, $findTextWord);
	echo $position . "<br>";

	//see if the string has been found

	if ($position === false) {
		echo "String not found!";
	}