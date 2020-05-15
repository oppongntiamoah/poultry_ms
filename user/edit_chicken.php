<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Chicken
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Chicken</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="inc/add_contact.php">
              <div class="box-body">

              <div class="form-group">
                                                <label>Selct Item to Update</label>
                                                <select class="form-control" name="batch_list">
                                                    <option>Select Item to Update</option>
                                                   <?php
                                                        $sql = mysqli_query($mysqli, "SELECT * From total_chicken");
                                                        $row = mysqli_num_rows($sql);
                                                        while ($row = mysqli_fetch_array($sql)){
                                                        echo "<option value='". $row['totalid'] ."'>" .$row['batch_id'] ."</option>" ;
                                                        }
                                                    ?>
                                                </select>
                                            </div>

                <div class="form-group">
                <label for="batch">Batch ID</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="batch" placeholder="Batch ID">
                </div>
                
                <div class="form-group">
                <label for="Price">Quantity</label>
                <input type="number" id="exampleInputText1" class="form-control" name="qty" placeholder="Quantity" >
                </div>

 

                <div class="form-group">
                <label for="updateby">Updated By</label>
                <input type="text" class="form-control" id="exampleInputText1" name="updateby" value="<?php echo $fname.' '.$lname; ?>" readonly="readonly">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="chickupdate">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->







<!--BODY-->
<?php  require "footer.php"; ?>