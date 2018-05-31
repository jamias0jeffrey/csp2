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

	<?php include "./partials/tail.php" ?>