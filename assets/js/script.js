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

	$("#signupform div input").on("keydown", function(e){
		if (e.which === 32)
			return false;
	});

	$("#login_username, #login_passowrd").on("keyup", function(){

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

	$("#profile_update").on("click", function(){
		var profile_fullname = $("#profile_fullname").val();
		var profile_username = $("#profile_username").val();
		var profile_email = $("#profile_email").val();
		var profile_password = $("#profile_password").val();

		console.log(profile_fullname);
		console.log(profile_username);
		console.log(profile_email);
		console.log(profile_password);
		
		$.ajax({
			url: "./lib/get_user_info.php",
			method: "POST",
			data: {"profile_fullname":profile_fullname,"profile_username":profile_username,"profile_email":profile_email,"profile_password":profile_password},
			success: function(data){
				$("#update_successful").html(data);
			}
		});
	});


});

// function addToCart(itemId) {
// 	var id = itemId;
// 	var quantity = $('#itemQuantity' + id).val();

// 	$.ajax({
// 		url: ".lib/add_to_cart.php"
// 		method: "POST";
// 		data: {"item_id":id, "item_quantity":quantity},
// 		success: function(data){
// 			$('a[href="./cart.php]').html(data);
// 		}
// 	})
// }