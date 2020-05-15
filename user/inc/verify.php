<?php

/*Verifies registered user email, the link to this page is included in the register.php email message*/
require 'db.php';
session_start();

//make sure email and hash variables are not empty
if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) ) {
	$email = $mysqli->escape($_GET['email']);
	$hash = $mysqli->escape($_GET['hash']);

	//SELECT USER WITH MATCHING EMAIL AND HASH, WHO HASN'T VERIFIED THEIR ACCOUNT
	$result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash' AND active='0' ");

	if ($result->num_rows == 0) {
		$_SESSION['message'] = "Your account has already been activated or your url is invalid!";
		header("location: error.php");

	}
	else{
		$_SESSION['message'] = "Your account has been activated";

		//set the user status to 1
		$mysqli->query("UPDATE users SET active='1' WHERE email='$email' ") or die($mysqli->error);
		$_SESSION['active'] = 1;

		header("location: success.php");
	}
}
else{
	$_SESSION['message'] = "Invalid parameters provided for account verification!";
	header("location: error.php");
}