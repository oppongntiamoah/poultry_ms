<?php
session_start();
require 'db.php';
//inserting data into medicine
    if (isset($_POST['addbatch'])) {
                                                
     /*Registration process, inserting user into 
     database and sending confirmation email */


    //SQL INJECTION
    $batch = $mysqli->escape_string($_POST['batch']);
    $qty = $mysqli->escape_string($_POST['qty']);
    $updateby = $mysqli->escape_string($_POST['updateby']);


    //EMAIL EXIST
    $result = $mysqli->query("SELECT * FROM total_chicken WHERE batch_id = '$batch' ") or die($mysqli->error());
    if ($result->num_rows > 0) {
        $_POST['msg'] = "<script>alert('Batch ID already exists!');</script>";
        header("location: ../chicken.php");
    }

    else{//item doesnt exist
        if (!empty($batch)) {
            if (!empty($qty)) {
                if (!empty($updateby)) {
                    $sql = "INSERT INTO total_chicken(batch_id, quantity, updated_by) 
                                                                    VALUES('$batch', '$qty', '$updateby')";

                    //Add user to the database
                    if ($mysqli->query($sql) === TRUE) {
                                                                   
                        $_SESSION['msg'] = "<script>alert('Batch Added Succesfully!');</script>";
                            header("location: ../chicken.php");
                                                                    

                    } else{
                                                                   
                        $_SESSION['msg'] = "<script>alert('Couldn't Add batch!');</script>";
                            header("location: ../chicken.php");

         }
                }
            }
        } 
    }

}


        //updating a feed

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
                header("location: chicken.php"); 
                
            } else{ 
                    echo "<script>alert('Couldn't update);</script>";
            } 
                                              
            $mysqli->close(); 
            }


            //DEAD

            if(isset($_POST['dead'])){

                $batch= $mysqli->escape_string($_POST['batch']);
                $qty = $mysqli->escape_string($_POST['qty']);
                $updateby = $mysqli->escape_string($_POST['updateby']);
    
                if (!empty($qty)) {
                    $sql = "UPDATE total_chicken SET quantity - '$qty' WHERE totalid='$var'";
                }
    
                $sql = "INSERT INTO dead_chicken(batch_id, quantity, updated_by) VALUES('$batch', '$qty', '$updateby')";
    
                if($mysqli->query($sql) === true){ 
                    $_SESSION['msg'] = "<script>alert('Record Updated Succesfully!');</script>";
                    header("location: chicken.php"); 
                    
                } else{ 
                        echo "<script>alert('Couldn't update);</script>";
                } 
                                                  
                $mysqli->close(); 
                }


?>


    