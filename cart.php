<?php
	
	session_start();
	require_once './lib/connect.php';
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
		
		<h3>Order Details</h3>  
		
		
		
	</main>

	<?php
		include "./partials/tail.php"
	?>