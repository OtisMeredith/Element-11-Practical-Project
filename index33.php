<h1>Howdy partner i am the home site</h1>

<?php
$user = 'root';
$pass = '';
$db = 'websitedb';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo("connected");
?>