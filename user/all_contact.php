<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Contact
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Contact</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
		                     //displaying customers into table
			                     
			                    $query1 = "SELECT * FROM customers LIMIT 200;";
			                    $result1 = mysqli_query($mysqli, $query1);
			                     
			                    while($row = mysqli_fetch_assoc($result1)){
			                        $name = $row['name'];
			                        $email = $row['email'];
                              $phone = $row['phone'];
                              $id = $row['id'];
                              $lname = $row['lname'];
			                    ?> 
			                        <tr>
			                            <td><?php echo $name." ".$lname; ?></td>
			                            <td><?php echo $email; ?></td>
                                        <td><?php echo $phone; ?></td>
                                        <td>
                                        <div class="btn-group">
                                                <button type="button" class="btn btn-info">Action</button>
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="show.php?id=<?php echo $id; ?>">View</a></li>
                                                    <li><a href="all_contact.php?id=<?php echo $id; ?>">Delete</a></li>
                                                </ul>
                                            </div>
                                      
                                        </td>
			                        </tr>
			                <?php   }  //End of while loop ?>
                </tbody>
                <tfoot>
                <tr>
                <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
                        
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->






<!--BODY-->
<?php  require "footer.php"; ?>

<?php 

if(isset($_GET["id"])){

$id = $_GET["id"];

$query1 = "SELECT * FROM customers Where id = '$id'";
$result1 = mysqli_query($mysqli, $query1);
 
$sql = "DELETE FROM customers WHERE id='$id' "; 


if ($mysqli->query($sql) === TRUE) {
  echo "<script>alert('Record deleted successfully')</script>";
  header("location: all_contact.php");
  
} else {
  echo "Error deleting record: " . $mysqli->error;

}

$mysqli->close();

}
?>