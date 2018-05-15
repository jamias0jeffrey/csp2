<?php 

	session_start();

    require_once "connect.php";

    $profile_fullname = $_POST['profile_fullname'];
    $profile_useraddress = $_POST['profile_useraddress'];
    $profile_email = $_POST['profile_email'];
    $profile_username = $_POST['profile_username'];
    $session_user = $_SESSION['current_user'];

    $profile_query = "UPDATE users
    SET user_fullname = '$profile_fullname', 
        user_address = '$profile_useraddress',
	    user_email = '$profile_email'
	WHERE username = '$session_user'";

    $profile_result = mysqli_query($conn, $profile_query);

?>


