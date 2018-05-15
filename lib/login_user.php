<?php

	session_start();

	require_once "connect.php";                                     

	$uname =  $_POST['login_username'];
	$pword =  sha1($_POST['login_password']);

	$query = "SELECT * FROM users WHERE username = '$uname' AND password = '$pword'";
	$result = mysqli_query($conn, $query);

	foreach ($result as $row) {
		$_SESSION['current_user'] = $row['username'];
	}
	
	header("Location: ../index.php")

?>