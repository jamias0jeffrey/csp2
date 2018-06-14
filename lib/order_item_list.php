<?php

	require_once './connect.php';
	
	$order_id = $_POST['order_item_list'];


	$order_details_sql = "SELECT i.product_name, oi.quantity FROM orders_items AS oi JOIN items AS i ON oi.item_id = i.id WHERE oi.order_id = '$order_id'";
	$order_details_sql_result = mysqli_query($conn, $order_details_sql);

	// echo $order_details_sql;

	echo '
		<table class="table table-hover">

			<!--Table head-->
			<thead>
				<tr>
					<th>Item Name</th>
					<th>Quantity</th>
				</tr>
			</thead>
			<!--Table head-->

			<tbody>

	';


	foreach ($order_details_sql_result as $orderitemlist) {
		extract($orderitemlist);
		echo '
					<tr>
						<td>'.$product_name.'</td>
						<td>'.$quantity.'</td>
					<tr>
		';
	}

	echo '
			</body>
		</table>
	';

?>