<?php 
	
	session_start();

	function getTitle(){
		echo "Profile Page";
	}

	require_once "./lib/connect.php";
	require_once "./partials/head.php";
?>

</head>

<body>
	
	<?php require_once "./partials/navbar.php" ?>

	<?php
		if (isset($_SESSION['current_user'])) {
			$user_id = $_SESSION['current_user'];
			$user_sql = "SELECT u.full_name, u.username, u.email FROM users AS u WHERE u.username = '$user_id'";
			$user = mysqli_query($conn, $user_sql) or die(mysqli_error($conn));

		}

		foreach ($user as $user_col) {
			echo $user_col['full_name'] . '<br>';
			echo $user_col['username'] . '<br>';
			echo $user_col['email'] . '<br>';
		}
	?>

	<div class="container">
			<!-- Material form register -->
		<form>
		    <p class="h4 text-center mb-4">Profile</p>

		    <!-- Material input text -->
		    <div class="md-form">
		        <i class="fa fa-user prefix grey-text"></i>
		        <input type="text" id="profile_username" class="form-control">
		        <label for="profile_username">Name: </label>
		    </div>

		    <!-- Material input email -->
		    <div class="md-form">
		        <i class="fa fa-envelope prefix grey-text"></i>
		        <input type="email" id="profile_email" class="form-control">
		        <label for="profile_email">Email: </label>
		    </div>


		    <!-- Material input password -->
		    <div class="md-form">
		        <i class="fa fa-lock prefix grey-text"></i>
		        <input type="password" id="profile_password" class="form-control">
		        <label for="profile_password">Password</label>
		    </div>

		    <div class="text-center mt-4">
		        <button class="btn btn-primary" type="submit">Register</button>
		    </div>
		</form>
		<!-- Material form register -->
	</div>
                      

<?php require_once "./partials/tail.php"; ?>
