<?php

	//find length of the string
	$name = "Jovana";
	echo strlen($name) . "<br>";

	//what happens if variable is not defined
	//echo strlen($name1) . "<br>";
	//strlen() method shows us 0

	//what happens if variable is empty
	$name = "";
	echo strlen($name) . "<br>";
	//strlen() method shows us 0

	//what happens if variable is null
	$name = null;
	echo strlen($name) . "<br>";
	//strlen() method shows us 0

	//condition with strlen() method

	if (strlen($name) > 0) {
		echo "Variable is not empty" . $name . "<br>";
	}else{
		echo 'Variable $name is empty';
	}




