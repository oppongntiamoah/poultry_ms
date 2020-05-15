<?php
require 'db.php';
session_start();


if (isset($_POST["submit"])) {


	//SQL injection
	$email = $mysqli->escape_string($_POST['login-username']);
	$password = $mysqli->escape_string($_POST['login-password']);
	$result = $mysqli->query("SELECT * FROM users WHERE email = '$email' ");


	if ($result->num_rows == 0) {//user doesnt exist
		$_SESSION['message'] = "User with that email doesn't exist";
		header("location: error.php");
	}
	else{

		if ($response->failed) {
		$_SESSION['message'] = "Verification Failed";
		header("location: error.php");

		}else{
			$user = $result->fetch_assoc();

			if ($password == $user['pwd']) {
				$_SESSION['fname'] = $user['fname'];
				$_SESSION['lname'] = $user['lname'];
				$_SESSION['mname'] = $user['mname'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['role'] = $user['role'];
				$_SESSION['contact'] = $user['contact'];

				//This is how we will know the user is logged in
				$_SESSION['logged_in'] = true;
				header("location: ../dashboard.php");
			}
			else{
				$_SESSION['message'] = "You have entered wrong password";
				header("location: error.php");
			}
		}
	}

}