<?php
//Reset your password

require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $mysqli->escape_string($_POST['email']);
	$result = $mysqli->query("SELECT * FROM users WHERE email='$email' ");

	if ($result->num_rows == 0) {//user does;nt exist
		$_SESSION['message'] = "User with that email does'nt exist!";
		header("location: error.php");
	} 
	else{//user exist

		$user = $result->fetch_assoc();
		$email = $user['email'];
		$name = $user['name'];
		$hash = $user['hash'];

		//session message to display on succes.php
		$_SESSION['message'] = "<p>Please check your email <span>$email</span> ". " for a confirmation link to complete your password reset!</p>";

		//send registration confirmation link(verify.php)
			$to = $email;
			$subject = "Password Reset";
			$msg_body ='Hello '.$name.', 
				You have requested password reset! Please Click this link to verify your account: 
				http://localhost/tutorials/CryptoTrade/asset/reset.php?email='.$email.'&hash='.$hash;

				mail($to, $subject, $msg_body);
					header("location: success.php");

	}
}