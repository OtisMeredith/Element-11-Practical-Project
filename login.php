<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Login</title>
</head>
<body>
	<div id="loginBox">
		<h1>Login Page</h1>
		<!--Creating a form to gather the login information required-->
		<form class="form" method="post" name="login" action = "loginverify.php">
			<!--Creating a label and input for the username-->
			<label class="loginbox" for="fname">Username</label>
			<input class="loginbox" type="text" id="fname" name="username"><br><br>

			<!--Creating a label and input for the password-->
			<label class="loginbox" for="lname">Password</label>
			<input class="loginbox" type="text" id="lname" name="password"><br><br>

			<!--Creating a button to submit information to loginverify.php-->
			<input class="loginbox" type="submit" value="Login" name="submit" class="login-button"/>
		</form>
		<a href="signup.php"><input class="loginbox" type="submit" value="Register Now" ></a>
	</div>
</body>
</html>