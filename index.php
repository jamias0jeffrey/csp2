<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">

	<?php

	session_start();

	function getTitle(){
		echo "Index Page";
	}

	?>

	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<!-- Import MD Bootstrap -->
	<link rel="stylesheet" type="text/css" href="./assets/css/mdb.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/css/style1.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

</head>

<body>

	<?php
	require_once "partials/navbar.php";
	?>

	<?php
	if (@($_GET['success'] == true)) {
		echo "<p id = 'success'>Registration Successfull. You may now login your account</p>";
	}

	?>

	<!-- <main class="container"> -->

		<div class="grid-container">
			<div class="item1"><img src="./assets/img/acerlogo.png" id="item1"></div>
			<div class="item2"><img src="./assets/img/asuslogo.png" id="item2"></div>
			<div class="item3"><img src="./assets/img/delllogo.png" id="item3"></div>  
			<div class="item4"><img src="./assets/img/hplogo.png" id="item4"></div>
			<div class="item5"><img src="./assets/img/applelogo.png" id="item5"></div>
			<div class="item6"><img src="./assets/img/best.jpg" id="item6"></div>
			<div class="item7">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
			

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="./assets/img/caritem1.png" alt="randomtext">
						</div>

						<div class="item">
							<a href="./products.php" class="btn btn-primary">Shop now</a>
						</div>

					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>


	<!-- </main> End of wrapper -->

	<?php require_once "./partials/footer.php" ?>

	<?php
	require_once "./partials/tail.php"
	?>