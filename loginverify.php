<?php
    //Setting the variables for database collection
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "1234";
    $dbName = "websitedb";

    //Assigning the connection to the databse to a variable
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName) or die("Connect failed: %s\n". $conn -> error);

    //Setting veriables to the input box values from the previous page
    $uname = $_POST['username'];
    $pword = $_POST['password'];

    //A simple query to pull information from a table where specific requirements are met
    $query = "SELECT username, password FROM acountinformation WHERE  username = '$uname'";

    //If the query is able to be executed
    if ($conn->query($query)) {
        //Setting the result of the query to a variable
        $result = $conn->query($query);

        //Assigning the information from the query to 2 arrays for comparison later
        while ($row = $result->fetch_assoc()) {
            $unamedata[] = $row['username'];
            $pworddata[] = $row['password'];
        }

        //Checking if the the value of $uname is within the querys array
        if (in_array($uname, $unamedata)) {
            //Checking if the the value of $pword is within the querys array
            if (in_array($pword, $pworddata)) {
                //Starting the global session
                session_start();
                //Assigning the username to be displayed later
                $_SESSION["uname"] = $uname;
                
                //Load index page
                header('Location: index.php');
            } else {
                //If $pword is not within the array load the loginfail page
                header('Location: loginfail.php');
            }
        } else {
            //If $uname is not within the array load the loginfail page
            header('Location: loginfail.php');
        }
    }
?>

