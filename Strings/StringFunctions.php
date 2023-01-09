<?php

	//String Functions

	$content = "  Learning how to do string operations using some String   functions";
	$position = FALSE;

	//find the number of words

	echo "Number of words in the String: " . str_word_count($content) . "<br>";

	//replace string

	echo "Replace 'operations' with 'manipulations' " . str_replace("operations", "manipulations", $content) . "<br>"; 

	//reverse string
	
	echo strrev($content) . "<br>";

	//shuffle string

	echo str_shuffle($content) . "<br>";

	//find position case insensitive

	echo stripos($content, "OPERATIONS") . "<br>";

	//uppercase and lowercase

	echo strtolower($content) . "<br>";
	echo strtoupper($content) . "<br>";

	//wrap words

	echo wordwrap($content , 1) . "<br>"; 

	//remove white spaces

	echo trim($content) ;

