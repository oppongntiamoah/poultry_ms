<?php
require 'db.php';
session_start();

if (isset($_POST['signup'])) {
	


	/*Registration process, inserting user into database and sending confirmation email
	*/

	//set session variables to be used on profile page
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['name'] = $_POST['name'];

	//SQL INJECTION
	$name = $mysqli->escape_string($_POST['name']);
	$email = $mysqli->escape_string($_POST['email']);
	$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_DEFAULT));
	$hash = $mysqli->escape_string(md5 ( rand(0,1000) ) );


	//EMAIL EXIST
	$result = $mysqli->query("SELECT * FROM users WHERE email = '$email' ") or die($mysqli->error());
	if ($result->num_rows > 0) {
		$_SESSION['message'] = "E-mail already exists!";
	}

	else{//email doesnt exist
		$sql = "INSERT INTO users(name, email, password, hash) VALUES('$name', '$email', '$password', '$hash')";

		//Add user to the database
		if ($mysqli->query($sql)) {
			
			
			$_SESSION['active'] = 0;
			$_SESSION['logged_in'] = true;
			$_SESSION['message'] = "confirmation link has been sent to $email, please verify your account by clicking on the link on the message";

			//send registration confirmation link(verify.php)
			$to = $email;
			$subject = "Account Verification";
			$msg_body ='Hello '.$name.', 
				Thank you for signing up! Please Click this link to verify your account: 
				http://localhost/tutorials/CryptoTrade/asset/verify.php?email='.$email.'&hash='.$hash;

				mail($to, $subject, $msg_body);
					header("location: ../Dashboard/user.php");

		} else{
			$_SESSION['message'] = "Registration Failed";
			header("location: error.php");

		}
	}

}