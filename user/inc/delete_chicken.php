<?php 
    session_start();
    require 'db.php';

  if(isset($_GET["id"])){

      $id = $_GET["id"];

      $query1 = "SELECT * FROM total_chicken Where batch_id = '$id'";
      $result1 = mysqli_query($mysqli, $query1);
      
      $sql = "DELETE FROM total_chicken WHERE batch_id='$id' "; 


      if ($mysqli->query($sql) === TRUE) {

        $sqll = "DELETE FROM dead_chicken WHERE dead_batch_id='$id' "; 
        $mysqli->query($sqll);

        header("location: ../chicken.php"); 
        $_SESSION['del'] = "<script>alert('Record deleted successfully')</script>";
        
        
      } else {
        echo "Error deleting record: " . $mysqli->error;

      }

      $mysqli->close();

  }
?>