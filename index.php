<?php

	session_start();

	// $_SESSION['current_user'] = 'admin';

	function getTitle(){
	echo "Index Page";
}
	require_once "./partials/head.php"
?>
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

	<main class="wrapperIndex">

			
		<header class="main-header" role="banner">
		  <img src="./assets/img/banner.jpg" alt="Banner Image"/>
		</header>

		<div class="container" id="boxes">
			
			<div class="row">

				<div class="col-md-3 col-sm-6 char_col">
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><i class="fas fa-truck"></i></div>
						<div class="char_content">
							<div><strong>Free Delivery</strong></div>
							<div class="char_subtitle">Within Manila</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 char_col">
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><i class="fas fa-truck"></i></div>
						<div class="char_content">
							<div><strong>Free Delivery</strong></div>
							<div class="char_subtitle">Within Manila</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 char_col">
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><i class="fas fa-truck"></i></div>
						<div class="char_content">
							<div><strong>Free Delivery</strong></div>
							<div class="char_subtitle">Within Manila</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 char_col">
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><i class="fas fa-truck"></i></div>
						<div class="char_content">
							<div><strong>Free Delivery</strong></div>
							<div class="char_subtitle">Within Manila</div>
						</div>
					</div>
				</div>


			</div>

		</div>

	


	</main> <!-- End of wrapper -->

<?php require_once "./partials/footer.php" ?>

<?php
	require_once "./partials/tail.php"
?>