<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "schoolDB";
		//Registration data for MySql
	$conn = new mysqli($servername, $username, $password, $dbname);
		// Create connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
		// Check connection

?>