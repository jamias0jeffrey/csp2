<?php

	session_start();
	require_once "./lib/connect.php";

	// $_SESSION['current_user'] = 'admin';

	function getTitle(){
	echo "Add Item Page";
}
	require_once "./partials/head.php";
?>
</head>

<body>

	<?php
		include "./partials/admin_navbar.php";

		$add_itm_sql = "SELECT * FROM item_categories";
		$add_itm_result = mysqli_query($conn, $add_itm_sql);
	?>



	<main class="wrapperIndex">
		
		<h1>Add Item</h1>

		<div class="container">
			<form action="./lib/upload.php" method="POST" enctype="multipart/form-data">
				<div>
					<label for="add_productname">Product Name: </label>
					<input type="text" name="add_productname" id="add_productname" class="form-control">
				</div>

				<div>
					<label for="add_desc">Description: </label>
					<textarea type="text" name="add_desc" id="add_desc" cols="50" rows="15" class="form-control"></textarea>
				</div>

				<div>
					<label for="add_price">Price: </label>
					<input type="number" name="add_price" id="add_price" class="form-control">
				</div>

				<div>
					<label for="add_category">Category: </label>
					<select name="add_category" id="add_category" class="form-control">
					<?php 
						foreach ($add_itm_result as $itm_result) {

							echo '
								<option value="'.$itm_result['id'].'">'.$itm_result['id']." - ".$itm_result['category_name'].'</option>
							';
						}	
					?>
					</select>
				</div>

				<div>
					<label for="add_image">Upload image: </label>
					<input type="file" name="add_image" id="add_image" class="form-control">
				</div>

				<div>
					<input type="submit" value="Add" name="submit" class="btn btn-primary">
				</div>
			</form>
		</div>


	</main> <!-- End of wrapper -->
pro


<?php
	require_once "./partials/tail.php"
?>