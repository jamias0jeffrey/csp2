<?php

	session_start();

	require_once './lib/connect.php';

	function getTitle(){
	echo "Admin Products";
	}

	include "./partials/head.php";


	//Request data from DB
	$items_sql = "SELECT it.id, it.product_name, it.description, it.price, ic.category_name, it.image FROM items AS it JOIN item_categories AS ic ON it.category=ic.id";
	$items = mysqli_query($conn, $items_sql);
	// var_dump($items);

	$cat_sql = "SELECT * FROM item_categories";
	$cat_result = mysqli_query($conn, $cat_sql);
	// var_dump($cat_result);

	$item_cat_sql = "SELECT it.id, it.product_name, it.description, it.price, ic.category_name, it.image FROM items AS it JOIN item_categories AS ic ON it.category=ic.id WHERE it.category = ic.category_name";
	$item_cat_result = mysqli_query($conn, $item_cat_sql);

?>
</head>
<body>
	<?php
		include "partials/admin_navbar.php";
	?>



	<main id="wrapperCart">
		
		<h1>Product list</h1>

		<div class="container">
			<ul class="nav md-pills nav-justified pills-secondary">
				<li class="nav-item">
					<a data-toggle="pill" href="#all">All</a>
				</li>
				<?php

					foreach ($cat_result as $cat_val) {
						echo '
							<li class="nav-item">
								<a data-toggle="pill" href="#'.$cat_val['category_name'].'">'.$cat_val['category_name'].'</a>
							</li>
						';
					}

				?>
			</ul>

			<div class="tab-content">

				<div class="tab-pane fade in show active" id="all" role="tab-panel">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Product Name</th>
								<th>Description</th>
								<th>Price</th>
								<th>Category</th>
								<th>Image</th>
								<th> </th>
							</tr>
						</thead>
						<?php
							if (mysqli_num_rows($items) > 0) {
								while ($row = mysqli_fetch_array($items)) {
									
							echo '
								<tbody>
									<tr>
										<td>'.$row['product_name'].'</td>
										<td>'.$row['description'].'</td>
										<td>'.$row['price'].'</td>
										<td>'.$row['category_name'].'</td>
										<td><img id="prd_list" src="'.$row['image'].'"></td> 
										<td>
										<a class="btn btn-primary" href="update_products.php?id='.$row['id'].'">Edit</a>
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete_conf">Delete</button>
										</td>
									</tr>
								</tbody>

								<div id="delete_conf" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Are you sure you want to delete.</h4>
											</div>
											<div class="modal-footer">
												<a class="btn btn-primary" href="./lib/delete_product.php?id='.$row['id'].'">Delete</a>
											</div>
										</div>
									</div>
								</div>
							';
								
								}
							}
						?>
					</table>
				</div>
				
				<?php
					foreach ($cat_result as $cat_val) {
						echo '
							<div class="tab-pane fade" id="'.$cat_val['category_name'].'" role="tab-panel">

								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Product Name</th>
											<th>Description</th>
											<th>Price</th>
											<th>Category</th>
											<th>Image</th>
											<th> </th>
										</tr>
									</thead>

									<tbody>
										<tr>
											
										</tr>
									</tbody>
								</table>

							</div>
						';
					}
				?>

				


			</div>
		</div>



		<div class="container">
		</div>

	</main>



	<?php
		include "./partials/tail.php"
	?>

