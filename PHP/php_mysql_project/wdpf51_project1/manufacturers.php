<?php 
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

  <title>Admin  | Products </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

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
            <h1 class="m-0 text-dark">Manufacturers List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Manufacturers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

       <div class="row ">
       <!--Or//  justify-content-center -->

        <!-- <div class=" offset-md-2 col-md-8 offset-md-2"> -->
        <div class="col-md-12">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Manufacturers</h3>
              <div class="text-right">
                <a href="manufacturer_entry.php" class="btn  btn-success">New Manufacturers</a> 
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Manufacturer Name</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <!-- Select query -->
                  <?php 

                    include_once("includes/db_config.php");
                    $sql = "SELECT * FROM manufacturer";
                    $result = $db->query($sql);

                    while($row =$result->fetch_assoc() ){
                  ?>

                  <tr>
                    <td> <?php echo $row['m_id'] ?> </td>
                    <td> <?php echo $row['m_name'] ?> </td>
                    <td> <?php echo $row['m_address'] ?> </td>
                    <td><?php echo $row['m_contact'] ?> </td>
                    <td>
                    
                      <a href="manufacturer_edit.php?id=<?php echo $row['m_id'];?>" > 
                        <i class="fa fa-edit"> </i>
                      </a> | 

                      <a onclick="return confirm('Are You Sure want to Delete?')" href="manufacturer_delete.php?id=<?php echo $row['m_id'];?>">
                        <i class="fa fa-trash"></i>
                      </a> 
                  </td>
                  </tr>
                  
                <?php } ?>
                
                </tbody>
                <tfoot>
                <tr>
                
                  <th>ID</th>
                  <th>Manufacturer Name</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

        </div>

       </div>
        
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

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
