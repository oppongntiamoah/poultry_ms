<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reports
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Report</li>
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
                  <th>Chicken</th>
                  <th>Mort</th>
                  <th>Total Chicken</th>
                  <th>Egg</th>
                </tr>
                </thead>
                <tbody>
                <?php
		                     //displaying customers into table
			                     
			                    $query1 = "SELECT * FROM total_chicken, dead_chicken, eggs WHERE total_chicken.batch_id = dead_chicken.dead_batch_id AND total_chicken.batch_id = eggs.egg_batch_id";
			                    $result1 = mysqli_query($mysqli, $query1);
			                     
			                    while($row = mysqli_fetch_assoc($result1)){
                              $batch = $row['batch_id'];
                              $quantity = $row['quantity'];
                              $dead_quantity = $row['dead_quantity'];
                              $egg_quantity = $row['egg_quantity'];
			                    ?> 
			                        <tr>
			                            <td><?php echo $batch; ?></td>
                                  <td><?php echo $quantity; ?></td>
                                  <td><?php echo $dead_quantity; ?></td>
                                  <td style="color: blue;"><?php echo $quantity - $dead_quantity; ?></td>
                                  <td><?php echo $egg_quantity; ?></td>
                                  
			                        </tr>
			                <?php   }  //End of while loop ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Batch</th>
                  <th>Chicken</th>
                  <th>Mort</th>
                  <th>Total Chicken</th>
                  <th>Egg</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

                        <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button type="button" class="btn btn-success pull-right" onclick="myFunction()"><i class="fa fa-print"></i> Print
          </button>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->







<!--BODY-->
<?php  require "footer.php"; ?>