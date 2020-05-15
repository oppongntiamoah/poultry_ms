<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sale Tickets
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sale Tickets</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
              <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">New Sales Ticket</button>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php
		                     //displaying customers into table
			                     
			                    $query1 = "SELECT * FROM sales LIMIT 200;";
			                    $result1 = mysqli_query($mysqli, $query1);
			                     
			                    while($row = mysqli_fetch_assoc($result1)){
			                        $product = $row['Product'];
                                    $sold_to = $row['sold_to'];
                                    $id = $row['id'];
                                    $date = $row['date_reg'];
                                    $price = $row['price'];
			                    ?> 
			                        <tr>
			                            <td><?php echo $id; ?></td>
                                        <td><?php echo $product; ?></td>
                                        <td><?php echo "GHS ".$price; ?></td>
                                        <td><?php echo $date; ?></td>
                                        
			                        </tr>
			                <?php   }  //End of while loop ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Date</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>


      <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Sales Ticket</h4>
              </div>
              <div class="modal-body">
              <form role="form" method="post" action="inc/server.php">
              <div class="box-body">

              <div class="form-group">
                <label>Product</label>
                <select class="form-control select2" style="width: 100%;" name="product">
                  <option selected="selected" value="Chicken">Chicken</option>
                  <option value="Pullet">Pullet</option>
                  <option value="Egg">Egg</option>
                  <option value="Feed">Feed</option>
                </select>
              </div>
              

              <div class="form-group">
                <label>Batch ID</label>
              <select class="form-control select2" style="width: 100%;" name="batch" required>
                <option selected="selected">Select Batch ID</option>
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
                <label>Sold To</label>
                <select class="form-control select2" style="width: 100%;" name="sold">
                  <option selected="selected">Select Customer</option>
                    <?php 
                        $sql = $mysqli->query("SELECT * FROM customers");
                        while ($row = $sql->fetch_assoc()){
                        echo "<option value=". $row['email']. ">" . $row['lname']. " " . $row['name'] ."</option>";
                        }
                    ?>
                </select>
              </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" class="form-control" name="price" id="exampleInputText1"  required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Quantity</label>
                  <input type="number" class="form-control" name="qty" id="exampleInputText1"  required>
                </div>
                
                <div class="form-group">
                  <label>Note</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="note"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="AddSales">Submit</button>
              </div>
            </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->







<!--BODY-->
<?php  require "footer.php"; ?>