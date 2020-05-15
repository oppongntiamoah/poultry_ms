<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Pullet
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Pullet</li>
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
                <th>Batch</th>
                    <th>Quantity</th>    
                    <th>Date Added</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
		                     //displaying chickens into table
			                     
			                    $query1 = "SELECT * FROM total_pullet LIMIT 200;";
			                    $result1 = mysqli_query($mysqli, $query1);
			                     
			                    while($row = mysqli_fetch_assoc($result1)){
			                        $batch = $row['batch_id'];
                                    $updated_by = $row['updated_by'];
			                        $dateinserted = $row['dateinserted'];
                                    $quantity = $row['quantity'];
                                    $id = $row['id'];
			                    ?> 
			                        <tr>
			                            <td><?php echo $batch; ?></td>
                                        <td><?php echo $quantity; ?></td>
                                        <td><?php echo $dateinserted; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info">Action</button>
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">View</a></li>
                                                    <li><a href="#">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
			                        </tr>
			                <?php   }  //End of while loop ?>
                </tbody>
                <tfoot>
                <tr>
                <th>Batch</th>
                    <th>Quantity</th> 
                    <th>Updated By</th> 
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DEAD</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                <th>Batch</th>
                    <th>Quantity</th> 
                    <th>Remarks</th> 
                    <th>Date Added</th> 
                    <th>Added By</th> 
                    <th>Action</th>
                </tr>
                <tr>
                <?php
		                     //displaying chickens into table
			                     
			                    $query1 = "SELECT * FROM dead_pullet LIMIT 200;";
			                    $result1 = mysqli_query($mysqli, $query1);
			                     
			                    while($row = mysqli_fetch_assoc($result1)){
			                        $batch = $row['batch_id'];
                                    $updated_by = $row['updated_by'];
			                        $dateinserted = $row['datereg'];
                                    $quantity = $row['quantity'];
                                    $id = $row['id'];
                                    $remark = $row['remark'];
			                    ?> 
			                        <tr>
			                            <td><?php echo $batch; ?></td>
                                        <td><?php echo $quantity; ?></td>
                                        <td><?php echo $remark; ?></td>
                                        <td><?php echo $dateinserted; ?></td>
                                        <td><?php echo $updated_by; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info">Edit</button>
                                                
                                            </div>
                                        </td>
			                        </tr>
			                <?php   }  //End of while loop ?>
                </tr>
                
              </table>
            </div>
            
        </div>


        
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->







<!--BODY-->
<?php  require "footer.php"; ?>