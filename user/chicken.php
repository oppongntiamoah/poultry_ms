<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Chicken
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Chicken</li>
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
			                     
			                    $query1 = "SELECT * FROM total_chicken LIMIT 200;";
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
                                                    <li><a href="edit_chicken.php">Edit</a></li>
                                                    <li><a href="inc/delete_chicken.php?id=<?php echo $batch; ?>">Delete</a></li>
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
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Add Dead</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                <th>Batch</th>
                    <th>Quantity</th> 
                    <th>Date Added</th> 
                    <th>Added By</th> 
                    <th>Action</th>
                </tr>
                <tr>
                <?php
		                     //displaying chickens into table
			                     
			                    $query1 = "SELECT * FROM dead_chicken LIMIT 200;";
			                    $result1 = mysqli_query($mysqli, $query1);
			                     
			                    while($row = mysqli_fetch_assoc($result1)){
			                        $batch = $row['dead_batch_id'];
                                    $updated_by = $row['dead_updated_by'];
			                        $dateinserted = $row['dead_datereg'];
                                    $quantity = $row['dead_quantity'];
                                    $id = $row['dead_id'];
                                    $remark = $row['dead_remark'];
			                    ?> 
			                        <tr>
			                            <td><?php echo $batch; ?></td>
                                        <td><?php echo $quantity; ?></td>
                                        <td><?php echo $dateinserted; ?></td>
                                        <td><?php echo $updated_by; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit">Edit</button>
                                                
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


  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Dead Chicken</h4>
              </div>
              <div class="modal-body">
              <form role="form" method="post" action="inc/server.php">
              <div class="box-body">

              <div class="form-group">
                <label for="batch">Batch ID</label>
                                                    <select class="form-control select2" style="width: 100%;" name="batch" required>
                                                    <option></option>
                                                   <?php
                                                        $sql = mysqli_query($mysqli, "SELECT * From total_chicken");
                                                        $row = mysqli_num_rows($sql);
                                                        while ($row = mysqli_fetch_array($sql)){
                                                        echo "<option value='". $row['batch_id'] ."'>" .$row['batch_id'] ."</option>" ;
                                                        }
                                                    ?>
                                                </select>
              </div>

                <div class="form-group">
                <label for="Price">Quantity</label>
                  <input type="number" class="form-control" name="qty" >
                </div>

                <div class="form-group">
                <label for="updateby">Updated By</label>
                 <input type="text" class="form-control" name="updateby" value="<?php echo $fname.' '.$lname; ?>" readonly="readonly">
              </div>


                
                <div class="form-group">
                  <label>Remark</label>
                  <textarea class="form-control" rows="3"  name="note"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="AddDead">Submit</button>
              </div>
            </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    




<!--BODY-->


<div class="modal fade" id="edit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit</h4>
              </div>
              <div class="modal-body">
              <form role="form" method="post" action="">
              <div class="box-body">

              <div class="form-group">
                <label for="batch">Batch ID</label>
                                                    <select class="form-control select2" style="width: 100%;" name="batch">
                                                    <option></option>
                                                   <?php
                                                        $sql = mysqli_query($mysqli, "SELECT * From total_chicken");
                                                        $row = mysqli_num_rows($sql);
                                                        while ($row = mysqli_fetch_array($sql)){
                                                        echo "<option value='". $row['batch_id'] ."'>" .$row['batch_id'] ."</option>" ;
                                                        }
                                                    ?>
                                                </select>
              </div>

                <div class="form-group">
                <label for="Price">Quantity</label>
                  <input type="number" class="form-control" name="qty" >
                </div>

                <div class="form-group">
                <label for="updateby">Updated By</label>
                 <input type="text" class="form-control" name="updateby" value="<?php echo $fname.' '.$lname; ?>" readonly="readonly">
              </div>


                
                <div class="form-group">
                  <label>Remark</label>
                  <textarea class="form-control" rows="3"  name="note"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="">Submit</button>
              </div>
            </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    



<?php  require "footer.php"; ?>


