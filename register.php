<?php
	session_start();
	require 'inc/db.inc.php';
		//Connect to the DB
	$user = $_POST["username"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
		//Getting variables from the form
	if ($password != $password2 OR $password == "" OR $username == "") {
		echo "Eingabe überprüfen";
		exit;
	}
		//Looking for empty fields
	$hash = md5($password);
		//Hashing the password with MD5
	$check = "SELECT id FROM accounts WHERE username = '$user'";
	$entries =  mysqli_query($conn, $check);
	$row = mysqli_num_rows($entries);
	if ($row == 0) {

		$query = "INSERT INTO accounts (username, password) VALUES ('$user', '$hash')";
			//Query which will be send to the DB
		if ($conn->query($query) === TRUE) {
			$_SESSION['user']=$user;
    		header("Location:index.php");
		}
		else {
   			echo $conn->error;
		}
		//Writing the data in the DB
	}
	else{
		echo "Name ist schon vergeben!";
	}
	mysqli_close($conn);
?>
