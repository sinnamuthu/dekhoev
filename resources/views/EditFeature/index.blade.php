@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Feature</title>
        {{--  bootstrap css styles  --}}
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-grid.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-grid.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-grid.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-grid.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-reboot.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-reboot.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-reboot.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-reboot.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-utilities.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-utilities.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-utilities.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-utilities.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/custom.css') }}" />
        <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


        {{--  font awesome cdn  --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">

</head>
<body class="section_admin">
{{--  edit feature in feature master  starts --}}

    <section class="new_feature ">
        <div class="container mb-5">
            <div class="create_new_feature">
                <h2 class="text-center">Edit Feature Master</h2>
                <div class="row my-5">
                    <div class="col-4">
                    </div>
                    <div class="col-2">
                        <form action="{{URL::to('/NewFeature/show')}}" method="GET" >
                            <input type='hidden' name='cate' value='2wheeler'>
                            <button type="radio"  class="btn btn-info btn-sm" value="2wheeler"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                            <label for="2wheel">2 Wheeler</label><br>
                        </form> 
                    </div>
                    <div class="col-2">
                        <form action="{{URL::to('/NewFeature/show')}}" method="GET" >
                            <input type='hidden' name='cate' value='3wheeler Cargo'>
                             <button type="radio"  class="btn btn-info btn-sm" value="3wheeler Cargo"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                            <label for="3wheelcargo">3 Wheeler Cargo</label><br>
                        </form>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                    </div>
                    <div class="col-2">
                        <form action="{{URL::to('/NewFeature/show')}}" method="GET" >
                            <input type='hidden' name='cate' value='4wheeler'>
                            <button type="radio"  class="btn btn-info btn-sm" value="4wheeler"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                            <label for="4wheel">4 Wheeler</label><br>
                        </form>
                    </div>
                    <div class="col-2">
                        <form action="{{URL::to('/NewFeature/show')}}" method="GET" >
                            <input type='hidden' name='cate' value='3wheeler Pass'>
                            <button type="radio"  class="btn btn-info btn-sm" value="3wheeler Pass"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                            <label for="3wheelpass">3 Wheeler Pass</label><br>
                        </form>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--  create new feature in feature master ends  --}}

            <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1">Return To Admin Screen</button></a></center>
{{-- table values--}}
    {{--  bootstrap js files  --}}
  <script type="text/javascript" src="{{ URL('../js/bootstrap.bundle.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.bundle.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.esm.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.esm.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.min.js') }}"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
 </script>

</body>
</html>
@stop


