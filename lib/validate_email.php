<?php
	require_once "connect.php";

	if(isset($_POST['email']) && !empty($_POST['email'])) {
		$email = $_POST['email'];
		$query = "SELECT * FROM users WHERE email = '$email'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			echo "Email already exist";
		} else {
			echo "Email available";
		}
	}
?>