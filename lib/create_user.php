<?php

require_once "connect.php";

$ufullname = $_POST['userfullname'];
$uaddress = $_POST['useraddress'];
$uname = $_POST['username'];
$email = $_POST['useremail'];
$pword = sha1($_POST['userpassword']);


$insert_user_qry = "INSERT INTO users(user_fullname, user_address, user_email, username, password) VALUES ('$ufullname','$uaddress','$email','$uname','$pword')";
$adduser = mysqli_query($conn, $insert_user_qry);

header('location: ../index.php');

if ($adduser) {
	console.log($adduser);
	echo "Registration successful";
}

?>