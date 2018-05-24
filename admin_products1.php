<?php

	session_start();

	require_once './lib/connect.php';

	function getTitle(){
	echo "Products";
	}

	include "./partials/head.php";
	$query = "SELECT * FROM items";  
	$result = mysqli_query($conn, $query);  

	if(isset($_POST["add_to_cart"]))  
	{  
		if(isset($_SESSION["shopping_cart"]))  
		{  
			$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
			if(!in_array($_GET["id"], $item_array_id))  
			{  
				$count = count($_SESSION["shopping_cart"]);  
				$item_array = array(  
					'item_id'               =>     $_GET["id"],  
					'item_name'               =>     $_POST["hidden_name"],  
					'item_price'          =>     $_POST["hidden_price"],  
					'item_quantity'          =>     $_POST["quantity"]  
				);  
				$_SESSION["shopping_cart"][$count] = $item_array;  
			}  
			else  
			{  
				echo '<script>alert("Item Already Added")</script>';  
				echo '<script>window.location="admin_products1.php"</script>';  
			}  
		}  
		else  
		{  
			$item_array = array(  
				'item_id'               =>     $_GET["id"],  
				'item_name'               =>     $_POST["hidden_name"],  
				'item_price'          =>     $_POST["hidden_price"],  
				'item_quantity'          =>     $_POST["quantity"]  
			);  
			$_SESSION["shopping_cart"][0] = $item_array;  
		}  
	}  

	if(isset($_GET["action"]))  
	{  
		if($_GET["action"] == "delete")  
		{  
			foreach($_SESSION["shopping_cart"] as $keys => $values)  
			{  
				if($values["item_id"] == $_GET["id"])  
				{  
					unset($_SESSION["shopping_cart"][$keys]);  
					echo '<script>alert("Item Removed")</script>';  
					echo '<script>window.location="cart.php"</script>';  
				}  
			}  
		}  
	}  
	

?>

</head>
<body>


	<?php
		include "partials/navbar.php";
	?>

	<main id="wrapperCart">

		<div class="grid-container">  
			<?php
			if(mysqli_num_rows($result) > 0) {  
				while($row = mysqli_fetch_array($result)) {  
					?>  
					<form method="post" action="admin_products1.php?action=add&id=<?php echo $row["id"]; ?>">  
						<div class="card-deck">  
							<div class="card mb-4">
								<div class="view overlay">
									<img src="<?php echo $row["image"]; ?>" class="card-img-top">  
									<div class="card-body">
										<h5><?php echo $row["product_name"]; ?></h5>  
										<p>₱ <?php echo $row["price"]; ?></p>  
										<input type="text" name="quantity" class="form-control" value="1">  
										<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>">
										<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
										<input type="submit" name="add_to_cart" class="btn btn-primary" value="Add to Cart">  
									</div>
								</div>
							</div>
						</div>  
					</form>  
					<?php  
				}  
			}  
			?>  
		</div>

	</main>  

<?php
	include "./partials/tail.php"
?>