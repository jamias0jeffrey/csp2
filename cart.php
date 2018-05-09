<?php
	
	session_start();

	function getTitle(){
	echo "Cart";
	}

	include "./partials/head.php"
?>
</head>
<body>


	<?php
		include "partials/navbar.php";
	?>

	<main id="wrapperCart">
		
		<h1>My Cart</h1>

		<?php
			// var_export($_SESSION['cart']);
			while ($x < $_SESSION['cart'].length){
				if ($_SESSION['cart'][$x] > 0){
					echo "ID: " . $x . " Quantity: " . $_SESSION['cart'][$x];
				}
				$x++;
			}
		?>

	</main>

	<?php
		include "./partials/tail.php"
	?>