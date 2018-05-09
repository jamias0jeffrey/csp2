<?php
	$id = $_POST['item_id'];
	$quantity = $_POST['item_quantity'];


	//upodate the items for session cart
	///cart = [{id:quantity}, {id:quantity}]
	//ex = 
	$_SESSION['cart'][$id] = $quantity;
	$_SESSION['item_count'] = array_sum($_SESSION['cart']);

	echo 'Cart <stong style="color:red;">('.$_SESSION['item_count'].')</strong>';
?>