<?php

	require_once "connect.php";

	if(isset($_POST['username']) && !empty($_POST['username'])) {
		$username = $_POST['username'];
		$query = "SELECT * FROM users WHERE username = '$username'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			echo "already in use!";
		} else {
			echo "✓";
		}
	}
?>