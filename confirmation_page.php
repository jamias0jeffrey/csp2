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

		echo '
			<p>Thank you for ordering from pureTech!</p>			
			<p>Your reference number is '.$ref_number.'</p>
			<p>You will receive an email shortly</p>

		';

	?>


	<?php include "./partials/tail.php" ?>