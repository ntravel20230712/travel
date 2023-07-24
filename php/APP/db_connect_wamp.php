<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'dimctravel_db');

	mysqli_select_db($con, 'dimctravel_db');
	mysqli_query($con, "set names utf8");	
	if (mysqli_connect_errno()) {
		die("Failed to connect to MySQL: " . mysqli_connect_error());
	}

?>




