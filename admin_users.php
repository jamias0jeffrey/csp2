<?php

	session_start();

	require_once './lib/connect.php';

	function getTitle(){
	echo "Admin Products";
	}

	include "./partials/head.php";


	//Request data from DB
	$users_sql = "SELECT * FROM users";
	$users = mysqli_query($conn, $users_sql);
	// var_dump($items);
?>
</head>
<body>


	<?php
		include "partials/admin_navbar.php";
	?>

	<main id="wrapperCart">
		
		<h1>User list</h1>

		<div class="container">

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Fullname</th>
						<th>Address</th>
						<th>Email</th>
						<th>Username</th>
						<th>User Status</th>
						<th>User Role</th>
					</tr>
				</thead>

			<?php
				foreach ($users as $user) {
					// echo $user['user_fullname'] . '<br>';
					// echo $user['user_address'] . '<br>';
					// echo $user['user_email'] . '<br>';
					// echo $user['username'] . '<br>';
					// echo $user['user_status'] . '<br>';
					// echo $user['user_role'] . '<br>';
					echo '

						<tbody>
							<tr>
								<td>'.$user['user_fullname'].'</td>
								<td>'.$user['user_address'].'</td>
								<td>'.$user['user_email'].'</td>
								<td>'.$user['username'].'</td>
								<td>'.$user['user_status'].'</td>
								<td>'.$user['user_role'].'</td>
							</tr>
						</tbody>

					';
				}
			?>

			</table>
		</div>

	</main>

	<?php
		include "./partials/tail.php"
	?>

