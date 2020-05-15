<?php
require 'db.php';
session_start();

if (isset($_POST['add_contact'])) {
	


	/*Registration process, inserting user into database and sending confirmation email
	*/

	

	//SQL INJECTION
    $name = $mysqli->escape_string($_POST['name']);
    $lname = $mysqli->escape_string($_POST['lname']);
	$email = $mysqli->escape_string($_POST['email']);
	$phone = $mysqli->escape_string($_POST['phone']);
	$note = $mysqli->escape_string($_POST['note']);


	//EMAIL EXIST
	$result = $mysqli->query("SELECT * FROM customers WHERE email = '$email' ") or die($mysqli->error());
	if ($result->num_rows > 0) {
		$_SESSION['message'] = "E-mail already exists!";
		header("location: ../new_contact.php");

	} 

    else{//email doesnt exist

       
            
            $sql = "INSERT INTO customers(name, lname, email, phone, note) VALUES('$name','$lname', '$email', '$phone', '$note')";

            //Add user to the database
            if ($mysqli->query($sql)) {
                
                $_SESSION['message'] = "Registration Successful";
                header("location: ../new_contact.php");

            } else{
                $_SESSION['message'] = "Registration Failed";
                header("location: ../new_contact.php");

            }

          
		
	}

}

if (isset($_POST['add_user'])) {
	


	/*Registration process, inserting user into database and sending confirmation email
	*/

	

	//SQL INJECTION
    $name = $mysqli->escape_string($_POST['name']);
    $lname = $mysqli->escape_string($_POST['lname']);
	$email = $mysqli->escape_string($_POST['email']);
	$phone = $mysqli->escape_string($_POST['phone']);
	$note = $mysqli->escape_string($_POST['note']);


	//EMAIL EXIST
	$result = $mysqli->query("SELECT * FROM users WHERE email = '$email' ") or die($mysqli->error());
	if ($result->num_rows > 0) {
		$_SESSION['message'] = "E-mail already exists!";
		header("location: ../new_contact.php");

	} 

    else{//email doesnt exist

       
            
            $sql = "INSERT INTO users(name, lname, email, phone, note) VALUES('$name','$lname', '$email', '$phone', '$note')";

            //Add user to the database
            if ($mysqli->query($sql)) {
                
                $_SESSION['message'] = "Registration Successful";
                header("location: ../new_contact.php");

            } else{
                $_SESSION['message'] = "Registration Failed";
                header("location: ../new_contact.php");

            }

          
		
	}

}





if(isset($_POST['chickupdate'])){

	$var = $mysqli->escape_string($_POST['batch_list']);
	$batch= $mysqli->escape_string($_POST['batch']);
	$qty = $mysqli->escape_string($_POST['qty']);
	$updateby = $mysqli->escape_string($_POST['updateby']);

	if (!empty($batch)) {
		$sql = "UPDATE total_chicken SET batch_id='$batch' WHERE totalid='$var'";
		
	}

	if (!empty($qty)) {
		$sql = "UPDATE total_chicken SET quantity='$qty' WHERE totalid='$var'";
	}

	if (!empty($updateby)) {
		$sql = "UPDATE total_chicken SET updated_by='$updateby' WHERE totalid='$var'";
	}

	if($mysqli->query($sql) === true){ 
		$_SESSION['msg'] = "<script>alert('Record Updated Succesfully!');</script>";
		header("location: ../chicken.php"); 
		
	} else{ 
			echo "<script>alert('Couldn't update);</script>";
	} 
									  
	$mysqli->close(); 
	}



