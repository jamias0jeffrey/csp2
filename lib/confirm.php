<?php
	
	session_start();

	require_once 'connect.php';

	$ref_number = $POST['ref_number'];
	$user = $POST['user'];
	$total = $POST['total'];
	$user_email = $POST['user_email'];

	// $confirm_user_sql = "SELECT id FROM users WHERE username = "$user"";
	// $confirm_user_sql_result = mysqli_query($conn, $confirm_user_sql);

	// $user_final = $confirm_user_sql_result;

	$confirm_sql = "INSERT INTO orders (reference_number, user_id, total)
					VALUES ('$ref_number', $user_final, $total)";
	$confirm_sql_result = mysqli_query($conn, $confirm_sql);

?>