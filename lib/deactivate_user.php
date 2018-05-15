<?php 

session_start();

require_once "connect.php";

$deactivate_user = $_SESSION['current_user'];

$deactivate_qry = "UPDATE users SET user_status = 0 WHERE username = '$deactivate_user'";
$deac_result = mysqli_query($conn, $deactivate_qry);


session_unset();
session_destroy();

header('Location: ../index.php');


?>