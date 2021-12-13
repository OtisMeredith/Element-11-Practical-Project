<?php
	//Starting a global session
	session_start();

	//Checking is variable "uname" is set within the session
	if(isset($_SESSION["uname"])){
		//If the variable is set, unset it and make it blank
    	unset($_SESSION["uname"]);
    }

    //Checking is variable "editdogbreed" is set within the session
    if(isset($_SESSION["editdogbreed"])) {
    	//If the variable is set, unset it and make it blank
    	unset($_SESSION["editdogbreed"]);
    }

    //Destroy / stop the current session
    session_destroy();

    //Load index page
    header('Location: index.php');
?>