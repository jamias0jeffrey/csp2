<?php
	
	session_start();

	require_once './lib/connect.php';

	function getTitle(){
		echo "Checkout";
	}

	include "./partials/head.php";



?>

</head>
<body>

	<?php include "partials/navbar.php"; ?>

	<?php

		$ref_number = $_POST['ref_number'];
		$user = $_POST['user_id'];
		$total = $_POST['total_price'];
		$user_email = $_POST['email'];

		$confirm_user_sql = "SELECT id FROM users WHERE username = '$user'";
		$confirm_user_sql_result = mysqli_query($conn, $confirm_user_sql);
			
		
		$confirm_sql = "INSERT INTO orders (reference_number, user_id, total)
						VALUES ('$ref_number', $user, $total)";
		$confirm_sql_result = mysqli_query($conn, $confirm_sql);





		echo '
			<p>Thank you for ordering from pureTech!</p>			
			<p>Your reference number is '.$ref_number.'</p>
			<p>You will receive an email shortly</p>

		';

	?>


	<?php include "./partials/tail.php" ?>