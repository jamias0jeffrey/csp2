<?php 

	session_start();

    require_once "connect.php";

    $profile_fullname = $_POST['profile_fullname'];
    $profile_username = $_POST['profile_username'];
    $profile_email = $_POST['profile_email'];
    $profile_password = sha1($_POST['profile_password']);
    $session_user = $_SESSION['current_user'];

    $profile_query = "UPDATE users
    SET full_name = '$profile_fullname', 
	    username = '$profile_username',
	    email = '$profile_email',
	    password = '$profile_password'
	    WHERE username = '$session_user'";

    $profile_result = mysqli_query($conn, $profile_query);

?>


