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
	<title>Home page</title>
</head>
<body>
	<div id="navBox">
		<!--All of the buttons to allows movement around the website-->
		<a href="login.php" class="button login">Login</a>
		<a href="veiw.php" class="button veiw">Veiw</a>
		<a href="edit.php" class="button edit">Edit</a>	
		<a href="add.php" class="button add">Add</a>
		<a href="remove.php" class="button remove">Remove</a>
		<a href="logout.php" class="button remove">Logout</a>
	</div>

	<div id="mainContent"> 
		<!--The main content of the website-->
		<h1 id="pageTitle">Welcome to the homepage <?php echo $_SESSION["uname"]; //Displays username ?></h1>
		<p id="mainPara">This is the homepage of this website. The website itself has 
		information about different dog breeds. I created this website as part of a 
		project for university. The task was to make an interactive website that was 
		connected to a database. With this connection the website was meant to pull
		information from different tables and display it. The website was also designed
		to allow users to enter new records, edit previous records and to search within
		the table. Since there is already a connection to a database, we were also meant
		to create a llogin and registration form that would store and pull the required
		information from the database.</p>
	</div>
</body>
</html>