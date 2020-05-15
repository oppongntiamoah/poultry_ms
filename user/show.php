<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>



<?php 
if(isset($_GET["id"])){

$id = $_GET["id"];

$query1 = "SELECT * FROM customers Where id = '$id'";
$result1 = mysqli_query($mysqli, $query1);
 
while($row = mysqli_fetch_assoc($result1)){
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $id = $row['id'];
    $lname = $row['lname'];
    $note = $row['note'];
    $reg = $row['date_reg'];

 } 
 
?>
<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">General</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-user margin-r-5"></i> Name</strong>

              <p class="text-muted">
              <?php echo $name." ".$lname; ?>
              </p>

              <hr>

              <strong><i class="fa fa-message margin-r-5"></i> Email</strong>

              <p class="text-muted"><?php echo $email; ?></p>

              <hr>

              <strong><i class="fa fa-mobile margin-r-5"></i> Contact</strong>

              <p class="text-muted"><?php echo $phone; ?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p> <p class="text-muted"><?php echo $note; ?></p></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Purchases</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
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
                  <th>ID</th>
                  <th>Product</th>
                  <th>Invoice</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php
		                     //displaying customers into table
			                     
			                    $query1 = "SELECT * FROM sales where sold_to='$email' ";
			                    $result1 = mysqli_query($mysqli, $query1);
			                     
			                    while($row = mysqli_fetch_assoc($result1)){
			                        $id = $row['id'];
			                        $Product = $row['Product'];
                                    $invoice = $row['invoice'];
                                    $date = $row['date_reg'];
			                    ?> 
			                        <tr>
			                            <td><?php echo $id; ?></td>
			                            <td><?php echo $Product; ?></td>
                                        <td><?php echo $invoice; ?></td>
                                        <td><?php echo $date; ?></td>
			                        </tr>
			                <?php   }  //End of while loop ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Product</th>
                  <th>Invoice</th>
                  <th>Date</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php   }  //End of while loop ?>




<!--BODY-->
<?php  require "footer.php"; ?>