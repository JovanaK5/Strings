<?php

	//combining two strings

	
	$fname = "Jovana";
	$lname = " , Knezevic";
	$fullname = $fname . $lname;
	echo $fullname . "<br>" ;

	//adding different variable types with . operator

	$total = 50;
	$passed = TRUE;
	$content = "Student $fullname got total " . $total . " -he passed the exams " . $passed;
	echo $content; 