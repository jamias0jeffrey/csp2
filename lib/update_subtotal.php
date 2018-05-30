<?php
	session_unset();

	$cartQuantity = $_POST['cartQty'];
	$cartPrice = $_POST['cartPrice'];

	$subtotal = $cartQuantity * $cartPrice;

	echo $subtotal;
?>