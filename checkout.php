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

	<main>

		<div class="row">
			<div class="col-md-6">

				<?php

					$total = $_GET['total'];
						echo '<h2>'.$total.'</h2>';

					foreach ($_SESSION['cart'] as $itemId => $itemQty) {
						$checkout_sql = "SELECT * FROM items WHERE id = '$itemId'";
						$checkout_sql_result = mysqli_query($conn, $checkout_sql);

						foreach ($checkout_sql_result as $checkItem) {

							extract($checkItem);

							echo '
								<p>'.$product_name.'</p>
								<p>'.$itemQty.'</p>
								<p>'.$total.'</p>
							';

						}
					}

				?>
			
			</div>
		</div>

	</main>  

	<?php include "./partials/tail.php" ?>


