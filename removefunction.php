<?php
	$dbHost = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "1234";
 	$dbName = "websitedb";

 	$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName) or die("Connect failed: %s\n". $conn -> error);

	$dogbreedremove = $_POST['dogbreedremove']; // get id through query string
	
	$fetchquery = "SELECT dogbreed FROM dogbreedtable";

	$fetchresult = $conn ->query($fetchquery);

    while ($row = $fetchresult->fetch_assoc()) {
        $fetchquerydata[] = $row['dogbreed'];
    }

    if (in_array($dogbreedremove, $fetchquerydata)) {
    	$deletequery = "DELETE FROM dogbreedtable WHERE dogbreed = '$dogbreedremove'";
        
        $deleteresult = $conn->query($deletequery);

		if($deleteresult) {
		    header("location:removesuccess.php"); // redirects to all records page
		} else {
		    header("location:removefail.php"); // display error message if not delete
		}
    } else {
        header('Location: removefail.php');
    }
?>