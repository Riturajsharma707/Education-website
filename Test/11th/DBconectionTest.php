<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBname = "testrkmathematics";

	$con = mysqli_connect($servername,$username,$password,$DBname);
	if (!$con) {
		echo "Connection failed";	
	}
?>