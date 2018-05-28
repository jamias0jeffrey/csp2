<?php

	session_start();
	
	$id = $_POST['item_id'];
	$quantity = $_POST['item_quantity'];

	//update the items for session cart
	//cart = [quantity]; ex: [3, 1, 0, 5];
	//item 1 has 3 orders, item 2 has 1 order, item 3 has 0, etc.
	//let a = $_session['cart'] which is an array.
	//let a[0] = 10; -> [10], let a[1] = 1; -> [10, 1]
	//[id] serves as the INDEX of my variable called $_SESSION['cart'] and transformed into an array
	$_SESSION['cart'][$id] = $quantity;

	//update the total quantities of items to be purchased
	$_SESSION['item_count'] = array_sum($_SESSION['cart']);

	echo 'Cart <strong style="color:lightgreen;">( '.$_SESSION['item_count'].' )</strong>';

?>