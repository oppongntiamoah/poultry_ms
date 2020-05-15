<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Feed
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Feed</li>
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
            <form role="form" method="post" action="inc/server.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Item Description</label>
                  <input type="text" class="form-control" name="itemDesc" id="exampleInputText1" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" class="form-control" name="price" id="exampleInputText1"  required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Quantity</label>
                  <input type="number" class="form-control" name="qty" id="exampleInputText1"  required>
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="Addfed">Submit</button>
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