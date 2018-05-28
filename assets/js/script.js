$(document).ready(function(){

	// ****** //
	// signup //
	// ****** //

	$('#signup').prop("disabled", true);
	

	$('#username').on("keyup", function(){
		var username = $(this).val();

		$.ajax({
			url:"././lib/validate_user.php",
			method:"POST",
			data:{"username": username},
			success:function(data){
				$('#user_avail').html(data);
			}
		});
	});


	$('#useremail').on("keyup", function(){
		var email = $(this).val();

		$.ajax({
			url:"././lib/validate_email.php",
			method:"POST",
			data:{"email": email},
			success:function(data){
				$('#mail_avail').html(data);
			}
		});
	});

	$('#userpassword').on("keyup", function(){
		var pass = $(this).val();
		if(pass.length < 8 && pass.length > 0){
			$("#pwlength").html("Password too short");
		} else {
			$('#pwlength').html("");
		}
	});

	$('#confirmpassword').on("keyup", function(){
		var pword = $('#userpassword').val();
		var confirmpword = $('#confirmpassword').val();

		if (pword == confirmpword) {
			$('#match').html('Password match');
		} else {
			$('#match').html('Password did not match');
		}
	});

	$("#username, #email, #userpassword, #confirmpassword").on("keyup", function(){
		var usermsg = $("#user_avail").html();
		var emailmsg = $("#mail_avail").html();
		var pwmsg = $("#pwlength").html();
		var confmsg = $("#match").html();
		
		if ((usermsg == "Name available")
			&& (emailmsg == "Email available")
			&& (pwmsg == "")
			&& (confmsg == "Password match")){
			$('#signup').prop("disabled", false);
		} else {
			$('#signup').prop("disabled", true);
		}
	});

	// $("#signupform div input").on("keydown", function(e){
	// 	if (e.which === 32)
	// 		return false;
	// });

	// ***** //
	// login //
	// ***** //

	$("#login_username,#login_passowrd").on("keyup", function(){

		var login_username = $("#login_username").val();
		var login_password = $("#login_password").val();

		$.ajax({
			url:"./lib/login_validation.php",
			method: "POST",
			data: {"login_username" : login_username, "login_password" : login_password},
			success: function(data){
				$("#errormsg").html(data);
			}

		});

	});


	// ******* //
	// profile //
	// ******* //

	// $('#profile_fullname, #profile_username, #profile_useraddress, #profile_email').prop("disabled", true);

	// $('#edit').on('click', function(){
	// 	$('#profile_fullname, #profile_username, #profile_useraddress, #profile_email').attr("readonly", false);
	// });

	$("#save").on("click", function(){
		var profile_fullname = $("#profile_fullname").val();
		var profile_useraddress = $("#profile_useraddress").val();
		var profile_username = $("#profile_username").val();
		var profile_email = $("#profile_email").val();
		
		$.ajax({
			url: "./lib/update_user_info.php",
			method: "POST",
			data: {"profile_fullname":profile_fullname,"profile_useraddress":profile_useraddress, "profile_username":profile_username,"profile_email":profile_email},
			success: function(data){
				alert ("Profile saved");
			}
		});
	});


	// ***** //
	// Items //
	// ***** //	

	// $("#updateitem").on("click", function()){
	// 	var product_id = $('#product_id').val();
	// 	var product_productname = $('#product_name').val();
	// 	var product_description = $('#description').val();
	// 	var product_price = $('#price').val();
	// 	var product_category = $('#category').val();
	// 	// var item_id = $('#formitemid').data('itemid');


	// 	$.ajax ({
	// 		url: "./lib/update_product_info.php",
	// 		method: "POST",
	// 		data: {"product_id":product_id,"product_productname":product_productname,"product_description":product_description,"product_price":product_price,"product_category":product_category}
	// 		success: function(data){
	// 			alert ("Product Updated");
	// 		}
	// 	});
	// });
	
});

// *********** //
// Add to Cart //
// *********** //

//  $(document).ready(function(){

//       $.ajax({
//         url:'cart.php',
//         type:'post',
//         data: {total_cart_items:"totalitems"},
//         success:function(response) {
//           $("total_items").value=response;
//         }
//       });

// });

// function add(id) {
// 	var name=$("#"+id+"_name").val();
// 	var price=$("#"+id+"_price").val();

// 	$.ajax({
// 		url:'./lib/cart.php',
// 		type:'POST',
// 		data:{"item_name":name,	"item_price":price},
// 		success:function(response) {
// 			document.getElementById("total_items").value=response;
// 		}
// });


function addToCart(itemId) {
	var id = itemId;
	var quantity = $('#quantity' + id).val();

	console.log(quantity);

	$.ajax({
		url: "./lib/add_to_cart.php",
		method: "POST",
		data: {"item_id":id, "item_quantity":quantity},
		success: function(data){
			alert ("item added to cart");
			$('.zzz').html(data);
		}
	});
}
