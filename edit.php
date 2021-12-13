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
 	
 	$query = "SELECT * FROM dogbreedtable";
	$result = $conn->query($query);
?>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Edit Page</title>
</head>
<body>
	<div id="navBox">
		<!--All of the buttons to allows movement around the website-->
		<a href="login.php" class="button login">Login</a>
		<a href="index.php" class="button home">Home</a>
		<a href="veiw.php" class="button veiw">Veiw</a>
		<a href="add.php" class="button add">Add</a>
		<a href="remove.php" class="button remove">Remove</a>
		<a href="logout.php" class="button remove">Logout</a>	
	</div>

	<div id="mainContent">
		<h1 id="pageTitle">Welcome to the edit page <?php echo $_SESSION["uname"]; //Displays username ?></h1>
		<p id="mainPara">This page displays all of the information currently stored on the server 
		in relation to dog breed and facts about each breed. It also allows the user to change and
		edit the information stored about the different breeds.</p>

		<!--Creating the form to allow input of required information-->
		<form class="editform" method="post" name="register" action="editconffunction.php">
			<!--Creating a label and input box for the dogbreed-->
			<label class="addbox" for="edit">Breed to edit (Capital Sensitive)<br> </label>
			<input class="addbox" type="text" name="dogbreed" required><br><br>

			<!--Creating a button to submit all information to editconffunction.php-->
			<input class="addbox" type="submit" value="Submit">
		</form>

		<table border='1' id="breedTable">
		<tr>
			<!--Creating the table to display the breed information-->
			<th class="tableTitle">Dog Breed</th>
			<th class="tableTitle">Weight in KG</th>
			<th class="tableTitle">Height in CM</th>
			<th class="tableTitle">Coat Type</th>
			<th class="tableTitle">Coat Length</th>
			<th class="tableTitle">Average Lifespan</th>
			<th class="tableTitle">Date of Entry</th>
		</tr> <?php //Pulling the required information for the database and assigning it to an array
			while($row = mysqli_fetch_array($result)) {
				//Printing the pulled information to the columns of the table
				echo "<tr>";
				echo "<td>" . $row['dogbreed'] . "</td>";
				echo "<td>" . $row['dogweight'] . "</td>";
				echo "<td>" . $row['dogheight'] . "</td>";
				echo "<td>" . $row['coattype'] . "</td>";
				echo "<td>" . $row['coatlength'] . "</td>";
				echo "<td>" . $row['averageage'] . "</td>";
				echo "<td>" . $row['entrydate'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		?>

	</div>
</body>
</html>