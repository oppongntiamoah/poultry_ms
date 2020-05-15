<?php  require "header.php"; ?>
<?php  require "nav.php"; ?>


<!--BODY-->




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Contact
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Contact</li>
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
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputText1" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" class="form-control" name="lname" id="exampleInputText1" placeholder="Enter Last Name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" name="email" id="exampleInputText1" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telephone</label>
                  <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Telephone" required>
                </div>
                <div class="form-group">
                  <label>Note</label>
                  <textarea class="form-control" rows="3" placeholder="Note" name="note" required></textarea>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_contact">Submit</button>
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