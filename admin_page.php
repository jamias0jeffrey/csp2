<?php

	session_start();

	// $_SESSION['current_user'] = 'admin';

	function getTitle(){
	echo "Admin Page";
}
	require_once "./partials/head.php"
?>
</head>

<body>

	<?php
		require_once "partials/admin_navbar.php";
	?>


	<main class="wrapperIndex">
		
		<h1>admin hompage</h1>


	</main> <!-- End of wrapper -->



<?php
	require_once "./partials/tail.php"
?>