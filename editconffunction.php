<?php
	//Setting the variables for database collection
	$dbHost = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "1234";
 	$dbName = "websitedb";

 	//Assigning the connection to the databse to a variable
 	$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName) or die("Connect failed: %s\n". $conn -> error);

 	//Starting a global session
 	session_start();

 	//Setting a variable to the value of <input name='dogbreed'>
	$dogbreededit = $_POST['dogbreed'];
	//Serring a global variable inside of the session in order to be accessed by a different script
	$_SESSION['editdogbreed'] = $dogbreededit;

	//Making a basic query to gather information from a table
	$fetchquery = "SELECT dogbreed FROM dogbreedtable";

	//Performing the query $fetchquery while connecting to the database assigned by $conn
	$fetchresult = $conn->query($fetchquery);

	//Fetching the results fromt he query and assigning them to an array
    while ($row = $fetchresult->fetch_assoc()) {
        $fetchquerydata[] = $row['dogbreed'];
    }

    //Checking is a specific dogbreed is within the array
    if (in_array($dogbreededit, $fetchquerydata)) {
    	//Loading the editconfirmation page if breed succesfully found
		header("location:editconfirmation.php");
    } else {
    	//Loading the editconffail page if breed was not found
        header('Location: editconffail.php');
    }
?>