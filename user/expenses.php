<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Expenses
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Expenses</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
              <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">New Expense</button>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Item</th>
                  <th>Amount</th>
                  <th>Quantity</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
		                     //displaying customers into table
			                     
			                    $query1 = "SELECT * FROM expenses LIMIT 200;";
			                    $result1 = mysqli_query($mysqli, $query1);
			                     
			                    while($row = mysqli_fetch_assoc($result1)){
			                        $item = $row['itemDesc'];
			                        $qty = $row['quantity'];
                                    $id = $row['id'];
                                    $price = $row['price'];
			                    ?> 
			                        <tr>
			                            <td><?php echo $id; ?></td>
                                        <td><?php echo $item; ?></td>
                                        <td><?php echo "GHS ".$price; ?></td>
                                        <td><?php echo $qty; ?></td>
                                        
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
                <th>ID</th>
                  <th>Item</th>
                  <th>Amount</th>
                  <th>Quantity</th>
                  <th>Action</th>
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
                  <label for="exampleInputEmail1">Item</label>
                  <input type="text" class="form-control" name="item" id="exampleInputText1" required>
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
                <button type="submit" class="btn btn-primary" name="AddExpense">Submit</button>
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