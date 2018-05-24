<?php

	session_start();

	require_once './connect.php';

	$del_id = $_GET['id'];

	$delete_sql = "DELETE FROM items WHERE id = $del_id";
	$del_sql_reslt = mysqli_query($conn, $delete_sql);

	header("Location: ../admin_products.php");
?>