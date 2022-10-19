<?php 
  include("includes/db_config.php");
  session_start();
  if(!isset($_SESSION['email'])){
    header("Location:index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin  | Dashboard </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

   <!-- summernote -->
   <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
    <?php include("includes/top_bar.php") ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php  include("includes/left_sidebar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><a href="products.php" class="btn  btn-success">View All Product</a> </h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Product Entry</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
       

        <!-- Main row -->
        <div class="row justify-content-center">
          <!-- Form -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- Insert Into Databaase -->
              <?php 
              
              ?>
              <!-- End Insert -->
                <?php 
                if(isset($_POST['psubmit'])){

                  include_once("includes/db_config.php");

                  extract($_POST);
                  $sql = "INSERT INTO products VALUES (NULL, '$pname','$pdetails','$pprice','$pthumb','$manu_id')";
                  $db->query($sql);
                  if($db->affected_rows>0){
                    echo "<div class='alert alert-success'> Product Added Successfully. </div>";
                  }else{
                    echo "<div class='alert alert-danger'> Try Again. </div>";
                  }
                }
                ?>
              <!-- form start -->
              <form role="form" method="post" action="">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Price Name</label>
                    <input type="text" name="pname" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Details</label> <br>
                    <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pdetails"> -->
                    <textarea name="pdetails" id="" cols="50" rows="10" placeholder="Enter Product Details"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Price Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Price" name="pprice">
                  </div>

                  <div class="form-group">
                    <label for="thumb">Product Photo </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="pthumb">
                        <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Manufacturer ID</label>
                    
                    <?php 
                       include_once("includes/db_config.php");
                       $sql = "SELECT * FROM manufacturer";
                       $result = $db->query($sql);
                    ?>
                    <select name="manu_id" class="form-control">
                      <option selected disabled>Select One</option>

                      <?php while($row = $result->fetch_assoc()){ ?>


                      <option value="<?php echo $row['m_id']?>"> <?php echo $row['m_name']?> </option>

                      <?php } ?>
                    
                      
                      
                    </select>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="psubmit">Submit</button>
                </div>
              </form>
              <!-- form End -->



            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include("includes/footer.php");?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>

<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('textarea').summernote()
  })
</script>

</body>
</html>
