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
		
		<h1>Index Page</h1>


	</main> <!-- End of wrapper -->



<?php
	require_once "./partials/tail.php"
?>