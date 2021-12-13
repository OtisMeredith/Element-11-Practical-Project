<?php
	$dbHost = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "1234";
 	$dbName = "websitedb";

 	$conn = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName) or die("Connect failed: %s\n". $conn -> error);

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "INSERT INTO acountinformation(username, password) VALUES ('$username', '$password')";

	if ($conn->query($query) === TRUE) {
		header('Location: signupsucess.php');
	} else {
		header('Location: signupfail.php');
	}
?>
