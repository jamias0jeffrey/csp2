<?PHP

if(isset($_GET["id"])) {
	foreach($_SESSION['cart'] as $del => $delete) {
		if($del == $_GET["id"]) {  
			unset($_SESSION["cart"][$del]);  
			echo '<script>alert("Item Removed")</script>'; 
			echo '<script>window.location="cart.php"</script>';  
		}  
	}
}

?>