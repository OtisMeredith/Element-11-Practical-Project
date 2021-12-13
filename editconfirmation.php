<?php
	$dbHost = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "1234";
 	$dbName = "websitedb";

 	$conn = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName) or die("Connect failed: %s\n". $conn -> error);

 	session_start();

 	$dogbreed = $_SESSION['editdogbreed'];
 	
 	$query = "SELECT * FROM dogbreedtable WHERE dogbreed = '$dogbreed'";
	$result = $conn->query($query);
?>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Edit Confirmation Page</title>
</head>
<body>

	<div id="mainContent">
		<h1 id="pageTitle">Welcome to the edit confirmarion page <?php echo $_SESSION["uname"]; ?></h1>
		<p id="mainPara">This page displays the data entry that has been selected on the previous page.
		Below are boxs with the required feilds needed to change the data. Once all data within the boxs
		is correct, press the submit button at the bottom of the page and the information will be updated</p>

		<table border='1' id="breedTable">
		<tr>
			<th class="tableTitle">Dog Breed</th>
			<th class="tableTitle">Weight in KG</th>
			<th class="tableTitle">Height in CM</th>
			<th class="tableTitle">Coat Type</th>
			<th class="tableTitle">Coat Length</th>
			<th class="tableTitle">Average Lifespan</th>
			<th class="tableTitle">Date of Entry</th>
		</tr> <?php 
			while($row = mysqli_fetch_array($result)) {
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

		<form class="editconfirmationform" method="post" name="register" action="editfunction.php">
			<label class="addbox" for="dogbreed">Dog Breed </label>
			<input class="addbox" type="text" name="dogbreed" required><br><br>
			<label class="addbox" for="dogweight">Dog Weight (in KG) </label>
			<input class="addbox" type="text" name="dogweight" required><br><br>
			<label class="addbox" for="dogheight">Dog Height (in CM) </label>
			<input class="addbox" type="text" name="dogheight" required><br><br>
			<label class="addbox" for="coattype">Coat Type </label>
			<input class="addbox" type="text" name="coattype" required><br><br>
			<label class="addbox" for="coatlength">Coat Length </label>
			<input class="addbox" type="text" name="coatlength" required><br><br>
			<label class="addbox" for="averageage">Average Lifespan </label>
			<input class="addbox" type="text" name="averageage" required><br><br>
			<input class="addbox" type="submit" value="Submit" onclick="insert()">
		</form>

	</div>
</body>
</html>