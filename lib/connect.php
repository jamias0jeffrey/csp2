<?php


// Define required parameters for DB Connection
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'puretech';

//Create a connection to DB
$conn = mysqli_connect($hostname, $username, $password, $db_name);

//Test DB connection
if (!$conn) {
	die('Connection failed: ' . mysql_error($conn));
} /*else 
	echo 'Connection successful.';*/