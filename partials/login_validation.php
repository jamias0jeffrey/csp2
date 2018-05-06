<?php

session_start();
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

if (authenticate($username,$password)){

	$_SESSION["user"] = $username;

	header('Location: ../index.php');
}

function authenticate($username,$password){
	if(($username == 'admin' || $username == 'admin@mail.com') && $password == 'secret'){
		return true;
	} else {
		return false;
	}
}

?>