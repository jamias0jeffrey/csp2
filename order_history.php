<?php
	
	session_start();

	require_once './lib/connect.php';

	function getTitle(){
		echo "Order History";
	}

	include "./partials/head.php";



?>

</head>
<body>

	<?php include "partials/navbar.php"; ?>

	<h4>Order History</h4>

	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<!--Table-->
				<table class="table table-hover">

					<!--Table head-->
					<thead>
						<tr>
							<th>Reference Number</th>
							<th>Status</th>
							<th>Total Price</th>
							<th></th>
						</tr>
					</thead>
					<!--Table head-->

					<tbody>

						<?php

							

							$current_user = $_SESSION['current_user'];

							$user_sql = "SELECT id FROM users WHERE username = '$current_user'";
							$user_sql_result = mysqli_query($conn, $user_sql);

							foreach ($user_sql_result as $user_order) {

								$user = $user_order['id'];

								$orders_sql = "SELECT o.reference_number, os.status, o.total, o.id FROM orders AS o JOIN order_status AS os ON o.status_id = os.id WHERE o.user_id = '$user'";
								$orders_sql_result = mysqli_query($conn, $orders_sql);

								foreach ($orders_sql_result as $user_order_list) {
									extract($user_order_list);
									echo '
										<tr>
											<td>'.$reference_number.'</td>
											<td>'.$status.'</td>
											<td>'.$total.'</td>
											<td <a class="tags" onmouseover="orderlist('.$id.')" id="'.$id.'">View Details</a></td>
										</tr>
										
									';

								}

							}

						?>
					</tbody>
				</table>
			</div>

			<div class="col-md-3 pull-right">
				<div id="itemlist">
				</div>
			</div>
		</div>
	</div>


	

		</div>
	</div>


<?php include "./partials/tail.php" ?>