<?php

	session_start();

	$cart_id = $_POST['cartId'];
	$qty = $_POST['qty'];

	$_SESSION['cart'][$cart_id] = $qty;
	$array = $_SESSION['cart'][$cart_id];

	$qty = array_sum($array);

	echo $qty;



?>