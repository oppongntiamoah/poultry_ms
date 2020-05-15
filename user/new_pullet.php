<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Pullet
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Pullet</li>
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
            <form role="form" method="post" action="inc/pullet.inc.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Batch ID</label>
                  <input type="text" class="form-control" name="batch" id="exampleInputText1" placeholder="Battch ID" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Quantity</label>
                  <input type="number" class="form-control" name="qty" id="exampleInputText1" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Update By</label>
                  <input type="text" class="form-control" name="updateby" value="<?php echo $fname.' '.$lname; ?>" readonly="readonly" id="exampleInputText1" required>
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="addbatch">Submit</button>
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