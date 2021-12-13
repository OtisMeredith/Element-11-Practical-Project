<?php 
	$dbHost = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "1234";
 	$dbName = "websitedb";

 	$conn = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName) or die("Connect failed: %s\n". $conn -> error);

	session_start();

	$toeditdogbreed = $_SESSION['editdogbreed'];

	$dogbreed = $_POST['dogbreed'];
	$dogweight = $_POST['dogweight'];
	$dogheight = $_POST['dogheight'];
	$coattype = $_POST['coattype'];
	$coatlength = $_POST['coatlength'];
	$averageage = $_POST['averageage'];


	$query = "UPDATE dogbreedtable SET dogbreed='$dogbreed', dogweight='$dogweight', dogheight='$dogheight', coattype='$coattype', coatlength='$coatlength', averageage='$averageage' WHERE dogbreed='$toeditdogbreed'";

	if ($conn->query($query)) {
		header('Location: editsuccess.php');
	} else {
		header('Location: editfail.php');
	}
?>
