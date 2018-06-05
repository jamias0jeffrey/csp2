<?php
	
	session_start();

	require_once './lib/connect.php';

	function getTitle(){
		echo "Checkout";
	}

	include "./partials/head.php";

	require_once './lib/email_send.php';



?>

</head>
<body>

	<?php include "partials/navbar.php"; ?>

	<?php

		$ref_number = $_POST['ref_number'];
		$user = $_POST['user_id'];
		$total = $_POST['total_price'];
		$user_email = $_POST['email'];
		$user_fullname = $_POST['fullname'];

		// $confirm_user_sql = "SELECT id FROM users WHERE username = '$user'";
		// $confirm_user_sql_result = mysqli_query($conn, $confirm_user_sql);
			
		
		$confirm_sql = "INSERT INTO orders (reference_number, user_id, total)
						VALUES ('$ref_number', $user, $total)";
		$confirm_sql_result = mysqli_query($conn, $confirm_sql);


		foreach ($_SESSION['cart'] as $item_Id => $item_Qty) {

			$order_item_Id = $item_Id;
			$order_item_Qty = $item_Qty;


			// $confirm_sql = "SELECT id FROM items WHERE id = '$item_Id'";
			// $confirm_sql_result = mysqli_query($conn, $confirm_sql);
			$confirm_itemPrice_sql = "SELECT price FROM items WHERE id = '$order_item_Id'";
			$confirm_itemPrice_sql_result = mysqli_query($conn, $confirm_itemPrice_sql);

			foreach ($confirm_itemPrice_sql_result as $itprice) {
				extract($itprice);

				$confirm_order_sql = "SELECT id FROM orders WHERE reference_number = '$ref_number'";
				$confirm_order_sql_result = mysqli_query($conn, $confirm_order_sql);
				
				foreach ($confirm_order_sql_result as $order) {

					extract($order);

					// echo "Item ID: " . $order_item_Id . "<br>";
					// echo "Quantity: " . $order_item_Qty . "<br>";
					// echo "Item price: " . $price . "<br>";
					// echo "Order ID: " . $id . "<br><br>";

					$order_details_sql = "INSERT INTO orders_items (item_id, order_id, quantity, price)
										VALUES ($order_item_Id, $id, $order_item_Qty, $price)";
					$order_details_sql_result = mysqli_query($conn, $order_details_sql);

					// var_dump($order_details_sql);					

				}
			}

		}


		// Query for sending email
        $username = $user_fullname;
        $usermail = $user_email;
        $mail_subject = "Pure Food Order#".$ref_number;
        $mail_body = "<p>Thanks for placing an order. Your order is being processed with referrence number ".$ref_number;

        sendMail($usermail,$username,$mail_subject,$mail_body);

		unset($_SESSION['cart']);


		echo '
			<p>Thank you for ordering from pureTech!</p>			
			<p>Your reference number is '.$ref_number.'</p>
			<p>You will receive an email shortly</p>

		';

	?>

	<a href="./index.php" class="btn btn-primary">Back</a>


	<?php include "./partials/tail.php" ?>