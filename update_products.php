<?php 
	
	session_start();

	function getTitle(){
		echo "Update Product Page";
	}

	require_once "./lib/connect.php";
	require_once "./partials/head.php";
?>

</head>

<body>
	
	<?php require_once "./partials/admin_navbar.php" ?>

		<?php if (isset($_GET['id'])) {
			$item_id = $_GET['id'];
			$update_sql = "SELECT * FROM items as up WHERE up.id = '$item_id'";
			$update_item = mysqli_query($conn, $update_sql) or die (mysqli_error($conn));
		}


			foreach ($update_item as $up_item) {

	?>

	<div class="container">
			<form action="./lib/update_product_info.php" method="POST" enctype="multipart/form-data">
			    <p class="h4 text-center mb-4">Update product info</p>

			    <div class="md-form" hidden>
			        <h5>Item id:</h5>
			        <input type="text" id="product_id" name="product_id" class="form-control" value="<?php echo $up_item['id'] ?>" readonly>
			    </div>

			    <div class="md-form">
			        <h5>Product Name:</h5>
			        <input type="text" id="product_name" name="product_name" class="form-control" value="<?php echo $up_item['product_name'] ?>">
			    </div>

			    <div class="md-form">
	                <h5 for="description">Description:</h5>
	                <textarea id="description" name="description" class="form-control" rows="18"><?php echo $up_item['description']?></textarea>
	            </div>

			    <div class="md-form">
			        <h5 for="price">Price</h5>
			        <input type="text" id="price" name="price" class="form-control" value="<?php echo $up_item['price'] ?>">
			    </div>

			    <div class="md-form">
			        <h5 for="category">Category</h5>
			        <input type="text" id="category" name="category" class="form-control" value="<?php echo $up_item['category'] ?>">
			    </div>

			    <div class="md-form">
			    	<h5 for="up_image">Image</h5>
			    	<input type="file" id="up_image" name="up_image">
			    </div>

			    <div class="text-left mt-2">
			        <button class="btn btn-primary" type="submit" name="updateitem" id="updateitem">Save</button>
			    </div>
			    
			</form>

		</div>

	<?php
		}
	?>


<?php require_once "./partials/tail.php"; ?>