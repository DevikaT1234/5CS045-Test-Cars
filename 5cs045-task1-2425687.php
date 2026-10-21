<?php

    $mysqli = new mysqli ("localhost", "db2425687", "ManUnited123#", "db2425687");

	if ($mysqli -> connect_errno) {
	  die("Failed to connect to MySQL: ".$mysqli -> connect_error);
	  exit();
	}
	
	// echo ("Connection successful");
	
	$sql = "SELECT Student_name, Course, Grade, Date_of_enrolment FROM students";
	
	$result = $mysqli->query($sql);
	
	if (!$result) {
		die('Data retrieval failed.');
		exit();
	}	
	echo ("Data retrieval successful"); 
	
?> 	