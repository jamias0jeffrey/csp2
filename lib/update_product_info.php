<?php 

	session_start();

    require_once "connect.php";

    $product_id = $_POST['product_id'];
    $product_productname = $_POST['product_name'];
    $product_description = $_POST['description'];
    $product_price = $_POST['price'];
    $product_category = $_POST['category'];

    // echo $product_id;
    // echo $product_productname;

    $product_query = "UPDATE items
    SET product_name = '$product_productname', 
        description = '$product_description',
	    price = '$product_price',
        category = '$product_category'
	WHERE id = '$product_id'";

    $profile_result = mysqli_query($conn, $product_query);

    header("Location: ../admin_products.php");

?>