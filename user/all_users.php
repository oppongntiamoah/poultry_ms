<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th> 
                    <th>Phone Number</th>   
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
		                     //displaying chickens into table
			                     
			                    $query1 = "SELECT * FROM users LIMIT 200;";
			                    $result1 = mysqli_query($mysqli, $query1);
			                     
			                    while($row = mysqli_fetch_assoc($result1)){
			                        $fname = $row['fname'];
                                    $lname = $row['lname'];
			                        $mname = $row['mname'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                    $role = $row['role'];
                                    $id = $row['id'];
			                    ?> 
			                        <tr>
			                            <td><?php echo $fname." ".$mname." ".$lname; ?></td>
                                        <td><?php echo $email; ?></td>
			                            <td><?php echo $phone; ?></td>
                                        <td><?php echo $role; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="showuser.php?id=<?php echo $id; ?>">View</a></li>
                                                    <li><a href="all_users.php?id=<?php echo $id; ?>">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
			                        </tr>
			                <?php   }  //End of while loop ?>
                </tbody>
                <tfoot>
                <tr>
                <th>Name</th>
                    <th>Email</th> 
                    <th>Phone Number</th>   
                    <th>Role</th>
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

$query1 = "SELECT * FROM users Where id = '$id'";
$result1 = mysqli_query($mysqli, $query1);
 
$sql = "DELETE FROM users WHERE id='$id' "; 

header("location: all_users.php");
if ($mysqli->query($sql) === TRUE) {
  echo "<script>alert('Record deleted successfully')</script>";
  
  
} else {
  echo "Error deleting record: " . $mysqli->error;

}

$mysqli->close();

}
?>