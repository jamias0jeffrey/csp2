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


	<main class="wrapperIndex">
		
		<h1>Index Page</h1>


	</main> <!-- End of wrapper -->



<?php
	require_once "./partials/tail.php"
?>