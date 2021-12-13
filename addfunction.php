<?php
	$dbHost = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "1234";
 	$dbName = "websitedb";

 	$conn = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName) or die("Connect failed: %s\n". $conn -> error);

	$dogbreed = $_POST['dogbreed'];
	$dogweight = $_POST['dogweight'];
	$dogheight = $_POST['dogheight'];
	$coattype = $_POST['coattype'];
	$coatlength = $_POST['coatlength'];
	$averageage = $_POST['averageage'];


	$query = "INSERT INTO dogbreedtable(dogbreed, dogweight, dogheight, coattype, coatlength, averageage) VALUES ('$dogbreed', '$dogweight', '$dogheight', '$coattype', '$coatlength', '$averageage')";
	
	if ($conn->query($query) === TRUE) {
		header('Location: addsuccess.php');
	} else {
		header('Location: addfail.php');
	}
?>