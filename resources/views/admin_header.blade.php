<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dekhoev | Admin</title>
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap.rtl.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap.rtl.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-grid.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-grid.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-grid.rtl.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-grid.rtl.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-reboot.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-reboot.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-reboot.rtl.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-reboot.rtl.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-utilities.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-utilities.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-utilities.rtl.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/bootstrap-utilities.rtl.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('https://dekhoev.com/css/custom.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://dekhoev.com/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="https://dekhoev.com/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://dekhoev.com/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://dekhoev.com/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://dekhoev.com/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://dekhoev.com/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://dekhoev.com/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://dekhoev.com/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed ">
  <div class="container-fluid section_admin">
 

    <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="http://dekhoev.com/dist/img/AdminLTELogo.png" alt="DekhoEV-logo" height="100" width="120">
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->

          <!-- Messages Dropdown Menu -->
          
          
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <form action="{{URL::to('/logout')}}" method="GET">
          <div>
          <li>
              <!--<a  data-widget="control-sidebar" data-controlsidebar-slide="true" herf="{{URL::to('Auth/logout')}}">-->
              <button value="submit" class="btn btn-primary"><i class="fa fa-sign-out" style="font-size:25px;color:red"></i>Logout</button> 
          </li>
          </div>
          </form>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
        <!-- Brand Logo -->
        <a href="/home" class="brand-link">
          <!--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
          <span class="brand-text font-weight-light">Dekhoev</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!--<div class="image">-->
            <!--  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
            <!--</div>-->
            <div class="info">
              <a href="#" class="d-block">
                  <!-- <p>Home</p> -->
                  <p>{{auth()->user()->name}}</p>
              </a>
            </div>
          </div>



          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
              <li class="nav-item ">
                <a href="{{URL::to('BrandMaster/index')}}" class="nav-link ">
                  <p>
                    Create a New OEM in the OEM Master
                  </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{URL::to('/NewModel/createnewmodel')}}" class="nav-link ">
                  <p>
                    Create a New Model
                  </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{URL::to('/NewFeature/index/')}}" class="nav-link ">
                  <p>
                    Create a New Feature in the Feature Master
                  </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{URL::to('/BrandMaster/show')}}" class="nav-link ">
                  <p>
                    Make Change to an Existing OEM Master
                  </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{URL::to('/ExistingModel/index/')}}" class="nav-link ">
                  <p>
                    Make Change to an Existing Model(Products)
                  </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{url('/Editfeaturemaster/index/')}}" class="nav-link ">
                  <p>
                    Make change to an Exisiting Feature
                  </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{URL::to('/Auth/show_admin')}}" class="nav-link">
                  <p>
                    Create Super Admin
                  </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{URL::to('/Post/index')}}" class="nav-link ">
                  <p>
                    Create a New Posts
                  </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{URL::to('/Metadescription/index')}}" class="nav-link ">
                  <p>
                    Meta Tags
                  </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{URL::to('/Blog/create')}}" class="nav-link">
                  <p>
                    Create a Blog Posts
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
              <!--     <i class="nav-icon fas fa-chart-pie"></i> -->
                  <p>
				  Contributors
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{URL::to('/Review/Owner')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Owner</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{URL::to('/Review/Blogger')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Blogger</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{URL::to('/Review/Oem')}} " class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>OEM</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- <li class="nav-item ">
                <a href="{{URL::to('/Website/Review/View/')}}" class="nav-link ">
                  <p>
                   Text Comments in Reviews
                  </p>
                </a>
              </li> -->
              <li class="nav-item ">
                <a href="{{URL::to('/Feedback/View/')}}" class="nav-link">
                  <p>
                    Feedback
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item ">
                <a href="{{URL::to('/Website/contributors/View/')}}" class="nav-link">
                  <p>
                    Contributors
                  </p>
                </a>
              </li> -->
             <!--  <li class="nav-item ">
                <a href="{{URL::to('/Website/Review/View/')}}" class="nav-link">
                  <p>
                    Reviews
                  </p>
                </a>
              </li> -->
              
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      
  </div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="https://dekhoev.com/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://dekhoev.com/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://dekhoev.com/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="https://dekhoev.com/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://dekhoev.com/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://dekhoev.com/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://dekhoev.com/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://dekhoev.com/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://dekhoev.com/plugins/moment/moment.min.js"></script>
<script src="https://dekhoev.com/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://dekhoev.com/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="https://dekhoev.com/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://dekhoev.com/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://dekhoev.com/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="../../dist/js/demo.js"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://dekhoev.com/dist/js/pages/dashboard.js"></script>

 <script type="text/javascript" src="{{ URL('http://dekhoev.com/js/bootstrap.bundle.js') }}"></script>
 <script type="text/javascript" src="{{ URL('http://dekhoev.com/js/bootstrap.bundle.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('http://dekhoev.com/js/bootstrap.esm.js') }}"></script>
 <script type="text/javascript" src="{{ URL('http://dekhoev.com/js/bootstrap.esm.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('http://dekhoev.com/js/bootstrap.js') }}"></script>
 <script type="text/javascript" src="{{ URL('http://dekhoev.com/js/bootstrap.min.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>
</html>
