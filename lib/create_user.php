<?php

require_once "connect.php";

$uname = $_POST['username'];
$email = $_POST['usermail'];
$pword = sha1($_POST['userpassword']);


$insert_user_qry = "INSERT INTO users(username, email, password) VALUES ('$uname','$email','$pword')";
$adduser = mysqli_query($conn, $insert_user_qry);

header('location: ../index.php');