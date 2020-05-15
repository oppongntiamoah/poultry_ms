<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Report</li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> PK Poultry, Inc.
            <small class="pull-right">Date: <?php echo date("Y/m/d"); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>

      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          Sales
          <address>
            <strong>Total Amount of Products Sold</strong><br>
            <?php
                  $result = mysqli_query($mysqli, 'SELECT SUM(price) AS value_sum FROM sales'); 
                  $row = mysqli_fetch_assoc($result); 
                  $sum = $row['value_sum'];
              ?>
              <strong><?php echo "GHS ".$sum; ?></strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Purchases
          <address>
            <strong>Total Amount of Products Purchased</strong><br>
          <?php
                  $result = mysqli_query($mysqli, 'SELECT SUM(price) AS value_sum FROM expenses'); 
                  $row = mysqli_fetch_assoc($result); 
                  $sum = $row['value_sum'];
              ?>
              <strong><?php echo "GHS ".$sum; ?></strong>
              </address>
        </div>

        <div class="col-sm-4 invoice-col">
          P&L
          <address>
            <strong></strong><br>
          <?php
                  $result = mysqli_query($mysqli, 'SELECT SUM(price) AS value_sum FROM expenses'); 
                  $row = mysqli_fetch_assoc($result); 
                  $sum = $row['value_sum'];

                  $result1 = mysqli_query($mysqli, 'SELECT SUM(price) AS value_summ FROM sales'); 
                  $row1 = mysqli_fetch_assoc($result1); 
                  $sum1 = $row1['value_summ'];
                  
                  
              ?>
              <strong><?php 
              
                if($sum < $sum1){
                  echo "PROFIT";
                } else{
                  echo "LOSS";
                }
              
              ?></strong>
              </address>
        </div>
        
        <!-- /.col -->
     
      </div>
      <!-- /.row -->
      


           <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <?php
                  $result ="SELECT count(*) FROM sales Where product = 'pullet' ";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($count);
                  $stmt->fetch();
                  $stmt->close();
          ?>

          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $count; ?></h3>

              <p>Pullet</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <p class="small-box-footer"><?php echo $count; ?></p>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->

          <?php
                  $result ="SELECT count(*) FROM sales Where product = 'egg' ";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($count);
                  $stmt->fetch();
                  $stmt->close();
          ?>
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $count; ?></sup></h3>

              <p>Egg</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <p class="small-box-footer"><?php echo $count; ?></p>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->

          <?php
                  $result ="SELECT count(*) FROM sales Where product = 'chicken' ";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($count);
                  $stmt->fetch();
                  $stmt->close();
          ?>
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $count; ?></h3>

              <p>Chicken</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <p class="small-box-footer"><?php echo $count; ?></p>
            </div>
        </div>
        <!-- ./col -->
       
    </div>
      <!-- /.row -->


      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              
              <th>Product</th>
              <th>Qty</th>
              <th>Description</th>
              <th>Subtotal</th>
              <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
		                     //displaying customers into table
			                     
			                    $query1 = "SELECT * FROM sales";
			                    $result1 = mysqli_query($mysqli, $query1);
			                     
			                    while($row = mysqli_fetch_assoc($result1)){
			                        $product = $row['Product'];
                                    $sold_to = $row['sold_to'];
                                    $id = $row['id'];
                                    $date = $row['date_reg'];
                                    $price = $row['price'];
                                    $qty = $row['num_product'];
                                    $note = $row['note'];
                                    $date = $row['date_reg'];
			                    ?> 
			                        <tr>
			                            
			                            
                                        <td><?php echo $product; ?></td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo $note; ?></td>
                                        <td><?php echo "GHS ".$price; ?></td>
                                        <td><?php echo $date; ?></td>
                                        
			                        </tr>
			                <?php   }  //End of while loop ?>
                
            </tbody>
          </table>
        </div>
        <!-- /.col -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button type="button" class="btn btn-success pull-right" onclick="myFunction()"><i class="fa fa-print"></i> Print
          </button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->








<?php  require "footer.php"; ?>