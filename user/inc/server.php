<?php
session_start();
require 'db.php';

//PRODUCTS

//inserting data into medicine
if (isset($_POST['AddMedication'])) {



//SQL INJECTION
    $day = $mysqli->escape_string($_POST['day']);
    $med = $mysqli->escape_string($_POST['med']);


//product EXIST
    $result = $mysqli->query("SELECT * FROM medicine WHERE day = '$day' ") or die($mysqli->error());
    if ($result->num_rows > 0) {
        echo "<script>alert('Day already exists!');</script>";
    }

else{//item doesnt exist
    if (!empty($day)) {
        if (!empty($med)) {
                    $sql = "INSERT INTO medicine(day, medication) 
                    VALUES('$day', '$med')";

//Add item to the database
                    if ($mysqli->query($sql) === TRUE) {

                        header("location: ../medicine.php");


                    } else{
                        echo "<script>alert('Couldn't Add Item!');</script>";

                    }
        }
    } 
}

}
//addEnds

//DeleteStarts


if(isset($_POST['delProduct'])){

    $var = $_POST['productlist'];

    $sql = "DELETE FROM products WHERE productid='$var'"; 
    if($mysqli->query($sql) === true){ 
        header("location: products.php"); 
    } else{ 
        echo "<script>alert('Item was not able to delete!');</script>";
    } 

    $mysqli->close(); 
}

//updating a Product

if(isset($_POST['updateProduct'])){

    $var = $mysqli->escape_string($_POST['product_list']);
    $itemdesc= $mysqli->escape_string($_POST['itemDesc']);
    $rprice = $mysqli->escape_string($_POST['retailprice']);
    $wprice = $mysqli->escape_string($_POST['wholesaleprice']);
    $stock = $mysqli->escape_string($_POST['stock']);

    if (!empty($itemdesc)) {
        $sql = "UPDATE products SET itemDesc='$itemdesc' WHERE productid='$var'";
    }

    if (!empty($price)) {
        $sql = "UPDATE products SET retailprice='$rprice' WHERE productid='$var'";
    }

    if (!empty($price)) {
        $sql = "UPDATE products SET wholesaleprice='$wprice' WHERE productid='$var'";
    }

    if (!empty($stock)) {
        $sql = "UPDATE products SET stock='$stock' WHERE productid='$var'";
    }

    if($mysqli->query($sql) === true){ 
        header("location: products.php"); 
    } else{ 
        echo "<script>alert('Couldn't update);</script>";
    } 

    $mysqli->close(); 
}
//update ends

//END PRODUCT
/* ============================================================== */

//START SUPPLIES

//inserting data into supply
if (isset($_POST['addSupply'])) {



//SQL INJECTION
    $itemdesc = $mysqli->escape_string($_POST['itemDesc']);
    $price = $mysqli->escape_string($_POST['price']);
    $qty = $mysqli->escape_string($_POST['qty']);


//supply EXIST
    $result = $mysqli->query("SELECT * FROM supplies WHERE itemDesc = '$itemdesc' ") or die($mysqli->error());
    if ($result->num_rows > 0) {
        echo "<script>alert('Supply already exists!');</script>";
    }

else{//item doesnt exist
    if (!empty($itemdesc)) {
        if (!empty($price)) {
            if (!empty($qty)) {
                $sql = "INSERT INTO supplies(itemDesc, price, quantity) 
                VALUES('$itemdesc', '$price', '$qty')";

//Add user to the database
                if ($mysqli->query($sql) === TRUE) {

                    header("location: supplies.php");


                } else{
                    echo "<script>alert('Couldn't Add Item!');</script>";

                }
            }
        }
    } 
}

}//AddSupplEnds


//deleting a supply

if(isset($_POST['delSupply'])){

    $var = $_POST['supplylist'];

    $sql = "DELETE FROM supplies WHERE supplysid='$var'"; 
    if($mysqli->query($sql) === true){ 
        header("location: supplies.php"); 
    } else{ 
        echo "<script>alert('Item was not able to delete!');</script>";
    } 

    $mysqli->close(); 
}

//updating a supply

if(isset($_POST['updateSupply'])){

    $var = $mysqli->escape_string($_POST['feed_list']);
    $itemdesc= $mysqli->escape_string($_POST['itemDesc']);
    $price = $mysqli->escape_string($_POST['price']);
    $qty = $mysqli->escape_string($_POST['qty']);

    if (!empty($itemdesc)) {
        $sql = "UPDATE supplies SET itemDesc='$itemdesc' WHERE supplysid='$var'";
    }

    if (!empty($price)) {
        $sql = "UPDATE supplies SET price='$price' WHERE supplysid='$var'";
    }

    if (!empty($qty)) {
        $sql = "UPDATE supplies SET quantity='$qty' WHERE supplysid='$var'";
    }

    if($mysqli->query($sql) === true){ 
        header("location: supplies.php"); 
    } else{ 
        echo "<script>alert('Couldn't update);</script>";
    } 

    $mysqli->close(); 
}

//End Supply
/* ============================================================== */

//Start Medicine

//inserting data into medicine
if (isset($_POST['med'])) {

//SQL INJECTION
    $itemdesc = $mysqli->escape_string($_POST['itemDesc']);
    $price = $mysqli->escape_string($_POST['price']);
    $qty = $mysqli->escape_string($_POST['qty']);


//EMAIL EXIST
    $result = $mysqli->query("SELECT * FROM medicine WHERE itemDesc = '$itemdesc' ") or die($mysqli->error());
    if ($result->num_rows > 0) {
        echo "<script>alert('Medicine already exists!');</script>";
    }

else{//item doesnt exist
    if (!empty($itemdesc)) {
        if (!empty($price)) {
            if (!empty($qty)) {
                $sql = "INSERT INTO medicine(itemDesc, price, quantity) 
                VALUES('$itemdesc', '$price', '$qty')";

//Add user to the database
                if ($mysqli->query($sql) === TRUE) {

                    header("location: medicine.php"); 


                } else{
                    echo "<script>alert('Couldn't Add Item!');</script>";

                }
            }
        }
    } 
}

}//addMedEnds


//deleting a Med

if(isset($_POST['delmed'])){

    $var = $_POST['feedlist'];

    $sql = "DELETE FROM medicine WHERE medid='$var'"; 
    if($mysqli->query($sql) === true){ 
        header("location: medicine.php"); 
    } else{ 
        echo "<script>alert('Item was not able to delete!');</script>";
    } 

    $mysqli->close(); 
}//delMed ENDS



//updating a medicine

if(isset($_POST['updateMed'])){

    $var = $mysqli->escape_string($_POST['feed_list']);
    $itemdesc= $mysqli->escape_string($_POST['itemDesc']);
    $price = $mysqli->escape_string($_POST['price']);
    $qty = $mysqli->escape_string($_POST['qty']);

    if (!empty($itemdesc)) {
        $sql = "UPDATE medicine SET itemDesc='$itemdesc' WHERE medid='$var'";
    }

    if (!empty($price)) {
        $sql = "UPDATE medicine SET price='$price' WHERE medsid='$var'";
    }

    if (!empty($qty)) {
        $sql = "UPDATE medicine SET quantity='$qty' WHERE medid='$var'";
    }

    if($mysqli->query($sql) === true){ 
        header("location: medicine.php"); 
    } else{ 
        echo "<script>alert('Couldn't update);</script>";
    } 

    $mysqli->close(); 
}//updating a medicine

//END MEDICINE
/* ============================================================== */

//FEEDs


//inserting data into feed
if (isset($_POST['Addfed'])) {


//SQL INJECTION
    $itemdesc = $mysqli->escape_string($_POST['itemDesc']);
    $price = $mysqli->escape_string($_POST['price']);
    $qty = $mysqli->escape_string($_POST['qty']);


//feed EXIST
    $result = $mysqli->query("SELECT * FROM feeds WHERE itemDesc = '$itemdesc' ") or die($mysqli->error());
    if ($result->num_rows > 0) {
        echo "<script>alert('Feed already exists!');</script>";
    }

else{//item doesnt exist
    if (!empty($itemdesc)) {
        if (!empty($price)) {
            if (!empty($qty)) {
                $sql = "INSERT INTO feeds(itemDesc, price, quantity) 
                VALUES('$itemdesc', '$price', '$qty')";

//Add user to the database
                if ($mysqli->query($sql) === TRUE) {

                    header("location: ../new_feed.php");


                } else{
                    echo "<script>alert('Couldn't Add Item!');</script>";

                }
            }
        }
    } 
}

}


//deleting a feed

if(isset($_POST['delFeed'])){

    $var = $_POST['feedlist'];

    $sql = "DELETE FROM feeds WHERE feedsid='$var'"; 
    if($mysqli->query($sql) === true){ 
     header("location: feeds.php");
 } else{ 
     echo "<script>alert('Item was not able to delete!');</script>";
 } 

 $mysqli->close(); 
}



//updating a feed

if(isset($_POST['updateFed'])){

    $var = $mysqli->escape_string($_POST['feed_list']);
    $itemdesc= $mysqli->escape_string($_POST['itemDesc']);
    $price = $mysqli->escape_string($_POST['price']);
    $qty = $mysqli->escape_string($_POST['qty']);

    if (!empty($itemdesc)) {
        $sql = "UPDATE feeds SET itemDesc='$itemdesc' WHERE feedsid='$var'";
    }

    if (!empty($price)) {
        $sql = "UPDATE feeds SET price='$price' WHERE feedsid='$var'";
    }

    if (!empty($qty)) {
        $sql = "UPDATE feeds SET quantity='$qty' WHERE feedsid='$var'";
    }

    if($mysqli->query($sql) === true){ 
        header("location: feeds.php");

    } else{ 
     echo "<script>alert('Couldn't update);</script>";
 } 

 $mysqli->close(); 
}


//inserting data into Sales
if (isset($_POST['AddSales'])) {



    //SQL INJECTION
        $product = $mysqli->escape_string($_POST['product']);
        $batch = $mysqli->escape_string($_POST['batch']);
        $sold_to = $mysqli->escape_string($_POST['sold']);
        $price = $mysqli->escape_string($_POST['price']);
        $qty = $mysqli->escape_string($_POST['qty']);
        $note = $mysqli->escape_string($_POST['note']);
    
      
                        $sql = "INSERT INTO sales(product, sales_batch_id, sold_to, price, num_product, note) 
                        VALUES('$product', '$batch', '$sold_to', '$price', '$qty', '$note')";
    
    //Add item to the database
                        if ($mysqli->query($sql) === TRUE) {
    
                            header("location: ../sales.php");
    
    
                        } else{
                            echo "<script>alert('Couldn't Add Item!');</script>";
    
                        }
                    }
                    

//inserting data into Expenses
if (isset($_POST['AddExpense'])) {



    //SQL INJECTION
        $item = $mysqli->escape_string($_POST['item']);
        $price = $mysqli->escape_string($_POST['price']);
        $qty = $mysqli->escape_string($_POST['qty']);
        $note = $mysqli->escape_string($_POST['note']);

                        $sql = "INSERT INTO expenses(itemDesc, price, quantity, note) 
                        VALUES('$item', '$price', '$qty', '$note')";
    
    //Add item to the database
                        if ($mysqli->query($sql) === TRUE) {
    
                            header("location: ../expenses.php");
    
    
                        } else{
                            echo "<script>alert('Couldn't Add Item!');</script>";
    
                        }
                    }



                    //EGG EGG EGG EGG
                    if (isset($_POST['addbatch'])) {
                                                
                        /*Registration process, inserting user into 
                        database and sending confirmation email */
                   
                   
                       //SQL INJECTION
                       $batch = $mysqli->escape_string($_POST['batch']);
                       $qty = $mysqli->escape_string($_POST['qty']);
                       $updateby = $mysqli->escape_string($_POST['updateby']);
                   
                   
                       //EMAIL EXIST
                       $result = $mysqli->query("SELECT * FROM eggs WHERE egg_batch_id = '$batch' ") or die($mysqli->error());
                       if ($result->num_rows > 0) {
                           $_POST['msg'] = "<script>alert('Batch ID already exists!');</script>";
                           header("location: ../egg.php");
                       }
                   
                       else{//item doesnt exist
                           if (!empty($batch)) {
                               if (!empty($qty)) {
                                   if (!empty($updateby)) {
                                       $sql = "INSERT INTO eggs(egg_batch_id, egg_quantity, egg_updated_by) 
                                                                                       VALUES('$batch', '$qty', '$updateby')";
                   
                                       //Add user to the database
                                       if ($mysqli->query($sql) === TRUE) {
                                                                                      
                                           $_SESSION['msg'] = "<script>alert('Batch Added Succesfully!');</script>";
                                               header("location: ../egg.php");
                                                                                       
                   
                                       } else{
                                                                                      
                                           $_SESSION['msg'] = "<script>alert('Couldn't Add batch!');</script>";
                                               header("location: ../egg.php");
                   
                            }
                                   }
                               }
                           } 
                       }
                   
                   }


                   if(isset($_POST['AddDead'])){

                    $batch= $mysqli->escape_string($_POST['batch']);
                    $qty = $mysqli->escape_string($_POST['qty']);
                    $updateby = $mysqli->escape_string($_POST['updateby']);
                    $remark = $mysqli->escape_string($_POST['note']);
        
                    
        
                    $sql = "INSERT INTO dead_chicken(dead_batch_id, dead_updated_by, dead_quantity, dead_remark) 
                    VALUES('$batch', '$updateby', '$qty', '$remark')";
        
                    if($mysqli->query($sql) === true){ 
                        $_SESSION['msg'] = "<script>alert('Record Updated Succesfully!');</script>";
                        header("location: ../chicken.php"); 
                        
                    } else{ 
                            echo "<script>alert('Couldn't update);</script>";
                    } 
                                                      
                    $mysqli->close(); 
                    }
                    


?>

