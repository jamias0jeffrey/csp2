<?php

	session_start();

	require_once "connect.php";                                     

	$uname =  $_POST['login_username'];
	$pword =  sha1($_POST['login_password']);

	$query = "SELECT * FROM users WHERE username = '$uname' AND password = '$pword'";
	$result = mysqli_query($conn, $query);


	$rows = mysqli_fetch_array($result);

	if ($rows['user_status'] == 1){

		if($rows['user_role'] == 'admin') {
			foreach ($result as $row) {
				$_SESSION['current_user'] = $row['username'];
			}
			header('Location: ../admin_page.php');
		} else {
			foreach ($result as $row) {
				$_SESSION['current_user'] = $row['username'];
			}
			if(isset($_SESSION['cart'])) {
				header('Location: ../checkout.php');				
			} else {
				header('Location: ../index.php');
			}
		} 
	} else if ($rows == 0){
		echo '
			<h2>Incorrect details</h2>
			<button onclick="history.go(-1);">Back</button>
		';
	} else {
		echo '
			<h1>Account is deactivated</h1>
			<button onclick="history.go(-1);">Back </button>
		';
	}
	


?>