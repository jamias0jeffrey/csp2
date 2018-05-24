<?php 

	session_start();

    require_once "connect.php";

    if (isset($_POST['updateitem'])) {
        $image = $_FILES['up_image']['name'];
        $target = '../assets/img/' . basename($image);
        $image_link = './assets/img/' . basename($image);

        $product_id = $_POST['product_id'];
        $product_productname = $_POST['product_name'];
        $product_description = $_POST['description'];
        $product_price = $_POST['price'];
        $product_category = $_POST['category'];

        // echo $product_id;
        // echo $product_productname;
        // var_dump($image);
        // var_dump($target);
        // var_dump($image_link);

        $success = move_uploaded_file($_FILES['up_image']['tmp_name'], $target);

            if($success) {
                $product_query = "UPDATE items
                SET product_name = '$product_productname', 
                    description = '$product_description',
            	    price = '$product_price',
                    category = '$product_category',
                    image = '$image_link'
            	WHERE id = '$product_id'";
            } else {
                $product_query = "UPDATE items
                SET product_name = '$product_productname', 
                    description = '$product_description',
                    price = '$product_price',
                    category = '$product_category'
                WHERE id = '$product_id'";
            }

        $profile_result = mysqli_query($conn, $product_query);
    }

        header("Location: ../admin_products.php");

?>