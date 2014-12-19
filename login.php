<html>
<head>
	<title>MySQL</title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
	<?php
	session_start();
	require 'inc/db.inc.php';
		//Connect to the DB
	$username = $_POST["username"];
	$password = $_POST["password"];
		//Getting variables from the form
	$password = md5($password);
		//Hashing the passowrd with MD5
	$pass = "SELECT password FROM accounts WHERE username = '$username'";
		//Query which will be send to the DB
	$sql = mysqli_query($conn, $pass);
	$row = mysqli_fetch_array($sql, MYSQL_ASSOC);
		//Getting the data and put it in an assosiative Array
	if ($password == $row["password"]) {
		$_SESSION['user']=$username;
    		echo "Welcome $username <br><a href='secret.php'>Secret</a><br><a href='index.php'>Zur&uuml;ck Zur Startseite</a>";
	}
	else {
 	   echo "Falsches Passwort oder falscher Username";
	}
	//Checking if the password is right
	mysqli_close($conn);
	?>
</body>
</html>