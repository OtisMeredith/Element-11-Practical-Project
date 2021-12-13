<?php
	//Setting the variables for database collection
	$dbHost = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "1234";
 	$dbName = "websitedb";

 	//Assigning the connection to the databse to a variable
 	$conn = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName) or die("Connect failed: %s\n". $conn -> error);

 	//Starting a global session
 	session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Add Information</title>
</head>
<body>
	<div id="navBox">
		<!--All of the buttons to allows movement around the website-->
		<a href="login.php" class="button login">Login</a>
		<a href="index.php" class="button home">Home</a>
		<a href="veiw.php" class="button veiw">Veiw</a>
		<a href="edit.php" class="button edit">Edit</a>
		<a href="remove.php" class="button remove">Remove</a>
		<a href="logout.php" class="button remove">Logout</a>
	</div>
		
	<div id="mainContent">
		<h1 id="pageTitle">Welcome to the add page <?php echo $_SESSION["uname"]; //Displays username ?></h1>

		<p id="mainPara">This page allows the user to add  information tothe dog breed 
		table. Just enter the information into the boxs and press submit. Once submitted 
		the information will be added to the table and be shown on the search page.</p>

		<!--Creating the form to allow input of required information-->
		<form class="addform" method="post" name="register" action="addfunction.php">
			<!--Creating a label and input box for the dogbreed-->
			<label class="addbox" for="dogbreed">Dog Breed </label>
			<input class="addbox" type="text" name="dogbreed" required><br><br>

			<!--Creating a label and input box for the dogweight-->
			<label class="addbox" for="dogweight">Dog Weight (in KG) </label>
			<input class="addbox" type="text" name="dogweight" required><br><br>

			<!--Creating a label and input box for the dogheight-->
			<label class="addbox" for="dogheight">Dog Height (in CM) </label>
			<input class="addbox" type="text" name="dogheight" required><br><br>

			<!--Creating a label and input box for the coattype-->
			<label class="addbox" for="coattype">Coat Type </label>
			<input class="addbox" type="text" name="coattype" required><br><br>

			<!--Creating a label and input box for the coatlength-->
			<label class="addbox" for="coatlength">Coat Length </label>
			<input class="addbox" type="text" name="coatlength" required><br><br>

			<!--Creating a label and input box for the average lifespan-->
			<label class="addbox" for="averageage">Average Lifespan </label>
			<input class="addbox" type="text" name="averageage" required><br><br>

			<!--Creating a button to submit all information to addfunction.php-->
			<input class="addbox" type="submit" value="Submit">
		</form>
	</div>
</body>
</html>