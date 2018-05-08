<?php

	session_start();

	require_once "connect.php";                                     

	$login_username = $_POST['login_username'];
	$login_password = sha1($_POST['login_password']);

	$query = "SELECT * FROM users WHERE username = '$login_username' AND password = '$login_password'";
	$result = mysqli_query($conn, $query);


	if(mysqli_num_rows($result) == 0){
		echo "Invalid credentials";
	}


?>