<?php

	session_start();

	require_once './lib/connect.php';

	function getTitle(){
	echo "Admin Products";
	}

	include "./partials/head.php";


	//Request data from DB
	$items_sql = "SELECT * FROM items";
	$items = mysqli_query($conn, $items_sql);
	// var_dump($items);
?>
</head>
<body>


	<?php
		include "partials/admin_navbar.php";
	?>

	<main id="wrapperCart">
		
		<h1>Product list</h1>

		<div class="container">

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
					foreach ($items as $item) {
						// var_dump($item);
						// echo $item['product_name'] . '<br>';
						// echo $item['description'] . '<br>';
						// echo $item['price'] . '<br>';
						// echo $item['image'] . '<br>';
						extract($item);

						echo '
							<tbody>
								<tr>
									<td>'.$product_name.'</td>
									<td>'.$description.'</td>
									<td>'.$price.'</td>
									<td>'.$category.'</td>
									<td><img class="card-img-top" src="'.$image.'" alt="Card image cap"></td>
									<td><a class="btn btn-primary" href="update_products.php?id='.$id.'">Edit</a></td>
								</tr>
							</tbody>
						';
					}
				?>
			</table>
		</div>

	</main>

	<?php
		include "./partials/tail.php"
	?>

