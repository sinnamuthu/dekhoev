
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dekhoev |Admin Dashboard</title>

<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap.rtl.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap.rtl.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../pubic/css/bootstrap-grid.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-grid.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-grid.rtl.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-grid.rtl.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-reboot.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-reboot.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-reboot.rtl.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-reboot.rtl.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-utilities.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-utilities.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-utilities.rtl.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-utilities.rtl.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('../../public/css/custom.css') }}" />


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../public/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../public/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <!--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
      <span class="brand-text font-weight-light">Dekhoev</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="/admin" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/Admin/4wspecs/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>4W Specs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/Admin/2wspecs/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>2W specs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/Admin/3wspecscargo/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>3W Cargo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/Admin/3wspecspass/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>3W Pass</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/Admin/review/')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                User Reviews
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/Admin/contributors/')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Contributors
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
       <div class="container-fluid">
       <div class=" mx-5 my-5">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            
        <div class="col-lg-3 col-12">
        <div class="input-group rounded ">
      <!--<input type="search" class="form-control rounded  bg-light" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />     -->
       </div>
</div>
         
       <div class="col-lg-9 col-12">
         <!--<button type="button" id='adnew' class="btn btn-primary btn-sm float-right px-5 py-2  "> <i class="fa fa-plus" aria-hidden="true"></i>Add New</button>-->
       </div> 
          <!-- ./col -->
        </div>
      </div>
        <!-- /.row -->
    </section>
    <section class="content">
    <div class="container-fluid">
    <div class="mx-5">
      <h2 class="mx-auto">Add 4w specs New Model</h2>
</div>
</div>
</section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class=" mx-5">
              <div class="card-header">
              <form action="{{URL::to('/Admin/store')}}" method="POST" enctype="multipart/form-data">
                   {!! csrf_field() !!}
                  <div class="form-row ">
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationCustom01">Make</label>
                      <input type="text" class="form-control py-4" id="validationCustom01" name="vehicle_type" placeholder="Make" maxlength="10" value="" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>    
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationCustom02">Model</label>
                      <input type="text"  class="form-control py-4" id="validationCustom02"name="model_name"  placeholder="Model" maxlength="10" value="" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationCustom02">Model Description</label>
                      <input type="text"  class="form-control py-4" id="validationCustom02" name="model_description" maxlength="75" placeholder="Model Decripition" value="" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>     
                  </div>
                  <div class="form-row">
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault03">Version Name</label>
                      <input type="text"  class="form-control py-4" id="validationDefault03" name="version_name" maxlength="20" placeholder="Version Name" required>
                    </div>
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault04">Special Limited Edition</label>
                      <input type="text"  class="form-control py-4" id="validationDefault04" name="special_limited_edition" maxlength="20" placeholder="Special Limited Edition" required>
                    </div>
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault05">Fuel</label>
                      <input type="text"  class="form-control py-4" id="validationDefault05" name="Fuel" maxlength="20" placeholder="Fuel" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault03">Product Launch Date</label>
                      <input type="text"  class="form-control py-4" id="validationDefault03" name="Product_Launch_Date" maxlength="5" placeholder="Product_Launch_Date" required>
                    </div>
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault04">Product Launch Month</label>
                      <input type="text"  class="form-control py-4" id="validationDefault04" name="Product_Launch_Month" maxlength="5" placeholder="Product_Launch_Month" required>
                    </div>
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault05">Product Launch Year</label>
                      <input type="text"  class="form-control py-4" id="validationDefault05" name="Product_Launch_Year" maxlength="5" placeholder="Product_Launch_Year" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault03">Model Year</label>
                      <input type="text"  class="form-control py-4" id="validationDefault03" name="Model_Year" maxlength="5" placeholder="Model_Year" required>
                    </div>
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault04">Year of Manufacturing</label>
                      <input type="text"  class="form-control py-4" id="validationDefault04" name="Year_of_Manufacturing" maxlength="5" placeholder="Year_of_Manufacturing" required>
                    </div>
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault05">Country</label>
                      <input type="text"  class="form-control py-4" id="validationDefault05" name="Country" maxlength="20" placeholder="Country" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault03">Trim Level</label>
                      <input type="text"  class="form-control py-4" id="validationDefault03" name="Trim_Level" maxlength="20" placeholder="Trim Level" required>
                    </div>
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault04">Price Ex Showroom</label>
                      <input type="text"  class="form-control py-4" id="validationDefault04" name="Price_Ex_Showroom" maxlength="10" placeholder="Price Ex Showroom" required>
                    </div>
                    <div class="col-lg-3 col-12 mb-5 mx-auto ">
                      <label for="validationDefault05">Motor(type)</label>
                      <input type="text" class="form-control py-4" id="validationDefault05" name="Motor_Description" maxlength="75" placeholder="Motor(type)" required>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                  <button value="save"  class="btn btn-primary btn-sm px-5 py-2 "><b>Save</b></button>
                </div>
                  </div>       

</form>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-auto ">
        <h4 class="font-weight-bold">Record Saved</h4>     
      </div>      
              </div>
              <!-- /.card-header -->
             
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="">Dekhoev</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->





<!-- jQuery -->
<script src="../../public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../public/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../public/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../public/plugins/moment/moment.min.js"></script>
<script src="../../public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../public/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../public/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="public/dist/js/demo.js"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../public/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

 <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.bundle.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.bundle.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.esm.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.esm.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.min.js') }}"></script>
 

 
 <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
