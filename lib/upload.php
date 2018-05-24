<?php

require_once "connect.php";

if ( isset($_POST['submit']) ) {
	$image = $_FILES['add_image']['name'];
	$target = '../assets/img/' . basename($image);

	$add_productname = $_POST['add_productname'];

	$add_description = $_POST['add_desc'];

	$add_price = $_POST['add_price'];

	$add_category = $_POST['add_category'];

	$image_link = './assets/img/' . basename($image);

	// var_dump($image);
	// var_dump($target);
	// var_dump($add_productname);
	// var_dump($add_price);
	// var_dump($add_category);

	move_uploaded_file($_FILES['add_image']['tmp_name'], $target);
	
	$add_sql = "INSERT INTO items (product_name, description, price, category, image) VALUES ('$add_productname', '$add_description', $add_price, $add_category, '$image_link')";

	$add_result = mysqli_query($conn, $add_sql);

	header('location: ../admin_products.php');
	// var_dump($add_sql);
	// var_dump($add_result);
}



?>
