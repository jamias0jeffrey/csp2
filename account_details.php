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
			$user_sql = "SELECT u.user_fullname, u.user_address, u.username, u.user_email FROM users AS u WHERE u.username = '$user_id'";
			$user = mysqli_query($conn, $user_sql) or die(mysqli_error($conn));

		}

			foreach ($user as $user_col) {
				
			

	?>
		<div class="container">
			<form>
			    <p class="h4 text-center mb-4">Profile</p>

			    <div class="md-form">
			        <i class="fas fa-user-ninja prefix grey-text"></i>
			        <label for="profile_fullname">Fullname:</label>
			        <input type="text" id="profile_fullname" class="form-control" value="<?php echo $user_col['user_fullname'] ?>">
			    </div>

			    <div class="md-form">
	                <i class="far fa-address-card prefix grey-text"></i>
	                <label for="profile_useraddress">Address:</label>
	                <input type="text" id="profile_useraddress" class="form-control" name="profile_useraddress" value="<?php echo $user_col['user_address'] ?>">
	            </div>

			    <div class="md-form">
			        <i class="fa fa-user prefix grey-text"></i>
			        <label for="profile_username">Username</label>
			        <input type="text" id="profile_username" class="form-control" value="<?php echo $user_col['username'] ?>" readonly>
			    </div>

			    <div class="md-form">
			        <i class="fa fa-envelope prefix grey-text"></i>
			        <label for="profile_email">Email Address</label>
			        <input type="email" id="profile_email" class="form-control" value="<?php echo $user_col['user_email'] ?>">
			    </div>
			    
			    <div class="text-left mt-2">
			        <button class="btn btn-primary" type="submit" id="save">Update</button>
			    </div>
			</form>
				<div class="text-left">
			        <button class="btn btn-primary" data-toggle="modal" data-target="#deactivatemodal">Deactivate account</button>
			    </div>

			    <!-- Modal -->
			    <div id="deactivatemodal" class="modal fade" role="dialog">
			    	<div class="modal-dialog modal-dialog-centered">

			    		<!-- Modal content-->
			    		<div class="modal-content">
			    			<div class="modal-header">
			    				<h4 class="modal-title">Are you sure you want to deactivate your account?</h4>
			    			</div>

			    			<div class="modal-footer">
			    				<a href="./lib/deactivate_user.php" class="btn btn-primary" role="button">Yes</a>
			    				<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
			    			</div>
			    		</div>

			    	</div>
			    </div>
		</div>

	<?php
		}
	?>
                      

<?php require_once "./partials/tail.php"; ?>
