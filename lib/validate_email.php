<?php
	require_once "connect.php";

	if(isset($_POST['email']) && !empty($_POST['email'])) {
		$email = $_POST['email'];
		$query = "SELECT * FROM users WHERE user_email = '$email'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			echo "already in use!";
		} else {
			echo "✓";
		}
	}
?>