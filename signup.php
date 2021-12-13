<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Sign Up</title>
</head>
<body>
	<div id="loginBox">
		<h1>Registration Page</h1>
		<form class="form" method="post" name="register" action="signupFunction.php">
			<label class="loginbox" for="fname">Username</label>
			<input class="loginbox" type="text" name="username" required><br><br>
			<label class="loginbox" for="lname">Password</label>
			<input class="loginbox" type="text" name="password" required><br><br>
			<input class="loginbox" type="submit" value="Submit" onclick="insert()">
		</form>
		<a href="login.php"><input class="loginbox" type="submit" value="Login Now" ></a>
	</div>
</body>
</html>	