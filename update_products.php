<?php 
	
	session_start();

	function getTitle(){
		echo "Profile Page";
	}

	require_once "./lib/connect.php";
	require_once "./partials/head.php";
?>

</head>

<body>
	
	<?php require_once "./partials/admin_navbar.php" ?>

		<?php if (isset($_GET['id'])) {
			$item_id = $_GET['id'];
			$update_sql = "SELECT up.product_name, up.description, up.price, up.category, up.image FROM items as up WHERE up.id = '$item_id'";
			$updateitem = mysqli_query($conn, $update_sql) or die (mysqli_error($conn));
		}

			foreach ($updateitem as $up_item) {

	?>

	<div class="container">
			<form>
			    <p class="h4 text-center mb-4">Update product info</p>

			    <div class="md-form">
			        <h5>Product Name:</h5>
			        <input type="text" id="product_name" class="form-control" value="<?php echo $up_item['product_name'] ?>">
			    </div>

			    <div class="md-form">
	                <h5 for="description">Description:</h5>
	                <input type="text" id="description" class="form-control" value="<?php echo $up_item['description'] ?>">
	            </div>

			    <div class="md-form">
			        <h5 for="price">Price</h5>
			        <input type="text" id="price" class="form-control" value="<?php echo $up_item['price'] ?>">
			    </div>

			    <div class="md-form">
			        <h5 for="category">Category</h5>
			        <input type="text" id="category" class="form-control" value="<?php echo $up_item['category'] ?>">
			    </div>
			    
			</form>
			    <div class="text-left mt-2">
			        <button class="btn btn-primary" type="submit" id="updateitem">Save</button>
			    </div>

		</div>

	<?php
		}
	?>