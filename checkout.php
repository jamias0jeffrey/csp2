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

				<table>

					<thead>
						<tr>
							<th colspan="2">Order Sumarry</th>
						</tr>
						<tr>
							<th>Product Name</th>
							<th>Quantity</th>
						</tr>
					</thead>

				<?php

					$total = $_SESSION['total_price'];


					foreach ($_SESSION['cart'] as $itemId => $itemQty) {
						$checkout_sql = "SELECT * FROM items WHERE id = '$itemId'";
						$checkout_sql_result = mysqli_query($conn, $checkout_sql);

						foreach ($checkout_sql_result as $checkItem) {

							extract($checkItem);

							echo '
								<tbody>
									<tr>
										<td>'.$product_name.'</td>
										<td>'.$itemQty.'</td>
									</tr>
							';

						}
					}
							echo '
									<tr>
										<td><strong>Total Price</strong></td>
										<td><p id="total_price">P '.$total.'</p></td>
									</tr>
								</tbody>
							';

				?>
				</table>
			
			</div>

			<div class="col-md-6">

				<?php
					$user = $_SESSION['current_user'];
					$ref_number = uniqid(time());

					$checkout_user = "SELECT * FROM users WHERE username = '$user'";
					$checkout_user_result = mysqli_query($conn, $checkout_user);

					$payment_sql = "SELECT * FROM payments";
					$payment_sql_result = mysqli_query($conn, $payment_sql);

						echo '
							<form method="POST" action="./confirmation_page.php">
						';

					foreach ($checkout_user_result as $user) {
						extract($user);
						echo '
								<div class="form-group">
									<label for="fullname">Full Name:</label>
									<input type="text" class="form-control" id="fullname" name="fullname" value="'.$user_fullname.'" readonly>
								</div>
								<div class="form-group">
									<label for="email">Email address:</label>
									<input type="email" class="form-control" id="email" name="email" value="'.$user_email.'" readonly>
								</div>
								<div class="form-group">
									<label for="address">Address:</label>
									<textarea type="text" class="form-control" id="address" readonly>'.$user_address.'</textarea>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="ref_number" name="ref_number" value="'.$ref_number.'" hidden>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="user_id" name="user_id" value="'.$id.'" hidden>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="total_price" name="total_price" value="'.$total.'" hidden>
								</div>
						';
					}
						echo '
								<div class="form-group" id="method">
								<label for="method">Payment Method:</label>
									<select>
						';

					foreach ($payment_sql_result as $payments) {
						extract($payments);
						echo '

										<option value="'.$payment_method.'">'.$payment_method.'</option>

						';
					}
						echo '
									</select>
								</div>
								<button type="submit" class="btn btn-primary" id="confirmation">Submit</button>
							</form>
						';
				?>
			</div>
		</div>

	</main>  

	<?php include "./partials/tail.php" ?>


