<?php
	//Starting a global session
 	session_start(); 

 	//If the variable "uname" is not set, load the login page
	if (!isset($_SESSION['uname'])) {
		//Loading login page
    	header('location: login.php');
 	} else {
 		//Loading the homepage if variable is set
 		header('location: homepage.php');
 	}
?>