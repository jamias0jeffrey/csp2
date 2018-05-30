<?php
	
	session_start();

	require_once './lib/connect.php';

	function getTitle(){
	echo "Cart";
	}

	include "./partials/head.php";


?>
</head>
<body>

	<?php
		include "partials/navbar.php";

		include "lib/delete_item_cart.php"
	?>

	<main id="wrapperCart">

		

			<?php

				$total = 0;
				if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){

					echo '
					<table id="cartTable">
						<tr>
							<th>Product Name</th>
							<th>Price (php)</th>
							<th>Quantity</th>
							<th>Sub-Total</th>
							<th>Action</th>
						</tr>
					';

					foreach ($_SESSION['cart'] as $key => $value) {
						$item_id = $key;
						$item_quantity = $value;

						$cart_item_sql = "SELECT * FROM items WHERE id = '$item_id'";
						$cart_item_result = mysqli_query($conn, $cart_item_sql);

						foreach ($cart_item_result as $cart_item) {
							extract($cart_item);

							$subtotal = $price * $item_quantity;

							echo '
								<tr>

									<td>'.$product_name.'</td>
									<td>
										<input type="number" name="price" id="itemPrice'.$item_id.'" value="'.$price.'" readonly></input>

									</td>
									<td>

										<input type="number" min="1" id="qty'.$item_id.'" class="upqty'.$item_id.'" value="'.$item_quantity.'" onClick="updateFromCart('.$item_id.','.$price.')" id="itemQuantity">
									</td>
									<td>
										<p class="subtotal" id="subtotal'.$item_id.'">'.$subtotal.'</p>
									</td>
									<td>
										<a class="btn btn-danger" href="cart.php?id='.$id.'">Delete</a>
									</td>
								</tr>


							';
							$total += $subtotal;
						}
					}

					echo '
						<tr>
							<td></td>
							<td></td>
							<td>Total Price:</td>
							<td>
								<p id="cartTotalPrice">'.$total.'</p>
							</td>
					';
							if(isset($_SESSION['current_user'])) {
								echo '
									<td>
										<a href="./checkout.php?total='.$total.'" class="btn btn-primary">Checkout</a>
									</td>
								';
							} else {
								echo '
									<td>
										<a class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Checkout</a>
									</td>
								';
							}
					echo '
						</tr>
						';

				} else {
					echo "<h5>Cart is empty!</h5>";
				}	
			?>
		</table>
			
	</main>

	<?php
		include "./partials/tail.php"
	?>