@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a New OEM Master</title>
        {{--  bootstrap css styles  --}}
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('pubic/css/bootstrap-grid.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-grid.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-grid.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-grid.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/custom.css') }}" />
        <!-- DataTables -->
        <!--<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">-->
        <!--<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">-->
        <!--<link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">-->


        {{--  font awesome cdn  --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">

</head>
<body class="section_admin">
    <div class="container">
        <h2 class="text-center">Create a Three Wheeler Pass Sub Category</h2>
        <div class="row">
            <div class="col-6">
                <div class="card text-center">
                    <h5 class="text-center my-3">L5M</h5>
                    <img src="{{ URL('public/UploadImages/images/ThreewheelerPass.JPG') }}" alt="threewheelpass-L5M" class="img-fluid">
                    <div class="card-body">
                        <form action="{{ URL::to('/BrandMaster/create')}}" method="GET">
                            <input type="hidden" id="L5M" name="category" value="L5M">
                            <button type="submit" class="btn btn-dark" >Select</button>
                        </form>
                    </div>
                </div>
            </div>
             <div class="col-6">
                <div class="card text-center">
                     <h5 class="text-center my-3">E-Rickshaw</h5>
                    <img src="{{ URL('public/UploadImages/images/ThreewheelerPass.JPG') }}" alt="threewheelpass-E-Rickshaw" class="img-fluid" height="50%">
                    <div class="card-body">
                       <form action="{{ URL::to('/BrandMaster/create')}}" method="GET">
                            <input type="hidden" id="E-Rickshaw" name="category" value="E-Rickshaw">
                            <button type="submit" class="btn btn-dark" >Select</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
           <center><a href="{{url('/BrandMaster/index/')}}"><button  class="return_admin_button my-5 ">Back</button></a></center>  
           <center><a href="{{url('/home')}}"><button  class="return_admin_button my-5 ">Return To Admin Screen</button></a></center>
    </div>
</body>

    {{--  bootstrap js files  --}}
  <script type="text/javascript" src="{{ URL('public/js/bootstrap.bundle.js') }}"></script>
 <script type="text/javascript" src="{{ URL('public/js/bootstrap.bundle.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('public/js/bootstrap.esm.js') }}"></script>
 <script type="text/javascript" src="{{ URL('public/js/bootstrap.esm.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('public/js/bootstrap.js') }}"></script>
 <script type="text/javascript" src="{{ URL('public/js/bootstrap.min.js') }}"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>
</html>
@stop