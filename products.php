<?php
	session_start();

	require_once './lib/connect.php';

	function getTitle(){
	echo "Products";
	}

	include "./partials/head.php";

	$query = "SELECT * FROM items";  
	$result = mysqli_query($conn, $query);  

	
?>

</head>
<body>


	<?php
		include "partials/navbar.php";
	?>

	<main id="wrapperCart">

		<div class="grid-container">  

			<?php 
				foreach ($result as $reslt1) {
					extract($reslt1);

					echo '

						<div class="card">
							<img class="card-img-top" src="'.$image.'" alt="Card image">
							<div class="card-body">
								<h5>'.$product_name.'</h5>
								<p>P '.$price.'</p>
								<input type="number" value="1" id="quantity'.$id.'"></input>
							</div> 
							<div class="card-footer">
								<button class"btn btn-primary" onClick="addToCart('.$id.')">Add to cart</button>
							</div>
						</div>


					';
				}
			?>
		</div>

<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div> 
  <div class="card-footer">Footer</div>
</div>
			


	</main>  

<?php
	include "./partials/tail.php"
?>