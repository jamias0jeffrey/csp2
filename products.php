<?php
	session_start();

	require_once './lib/connect.php';

	function getTitle(){
	echo "Products";
	}

	require_once "./partials/head.php";

	$product_list = "SELECT * FROM items";  
	$product_list_result = mysqli_query($conn, $product_list);

	$category_list = "SELECT * FROM item_categories";
	$category_list_result = mysqli_query($conn, $category_list);

	
?>

</head>
<body>

	<?php include "partials/navbar.php"; ?>

	<div class="container">

		<ul class="nav md-pills nav-justified pills-secondary">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#all" role="tab">All</a>
			</li>
			<?php
				foreach ($category_list_result as $cat_list) {
					echo '
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#'.$cat_list['category_name'].'">'.$cat_list['category_name'].'</a>
						</li>
					';
				}
			?>
		</ul>

		<div class="tab-content">
			<div class="tab-pane fade in show active" id="all" role="tabpanel">
				<div class="grid-container">
					<?php
						foreach ($product_list_result as $product1) {
							extract($product1);
							echo '
							<div class="card">
								<img class="card-img-top" src="'.$image.'" alt="Card image">
								<div class="card-body">
									<h5>'.$product_name.'</h5>
									<p>P '.$price.'</p>
									<input type="number" value="1" min="1" id="quantity'.$id.'"></input>
								</div> 
								<div class="card-footer">
									<button class"btn btn-primary" onClick="addToCart('.$id.')">Add to cart</button>
								</div>
							</div>
							';
						}
					?>

				</div>
			</div>	

				<?php
					foreach ($category_list_result as $cat_list) {

						echo '
							<div class="tab-pane fade" id="'.$cat_list['category_name'].'" role="tab-panel">

						';


							$category_value = $cat_list['id'];

							$item_sort = "SELECT * FROM items where category = $category_value";
							$item_sort_result = mysqli_query($conn, $item_sort);
							echo '
							<div class="grid-container">
						';
							foreach ($item_sort_result as $itemsort) {
								extract($itemsort);
								echo '
									<div class="card">
											<img class="card-img-top" src="'.$image.'" alt="Card image">
										<div class="card-body">
											<h5>'.$product_name.'</h5>
											<p>P '.$price.'</p>
											<input type="number" value="1" min="1" id="quantity'.$id.'"></input>
										</div> 
										<div class="card-footer">
											<button class"btn btn-primary" onClick="addToCart('.$id.')">Add to cart</button>
										</div>
									</div>
								';
							}
						echo '
						</div>
						';

						echo '
							</div>
						';

					}
				?>	
		</div>

	</div>


<?php include "./partials/tail.php" ?>