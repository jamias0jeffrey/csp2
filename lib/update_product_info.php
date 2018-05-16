<?php 

	session_start();

    require_once "connect.php";

    $product_productname = $_POST['product_productname'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $product_id = $_POST['itemid'];

    $product_query = "UPDATE items
    SET product_name = '$product_productname', 
        description = '$product_description',
	    price = '$product_price',
        category = '$product_category',
	WHERE id = '$product_id'";

    $profile_result = mysqli_query($conn, $product_query);

    header("Location: ../admin_products.php");

?>