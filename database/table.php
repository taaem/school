<html>
<head>
	<title>MySQL</title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "schoolDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE accounts(
	id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username varchar(256) NOT NULL,
	password varchar(256) NOT NULL,
	reg_date TIMESTAMP
	)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
	?>
</body>
</html>