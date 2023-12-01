@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Model</title>
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
        <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


        {{--  font awesome cdn  --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">

</head>
<body class="section_admin">
{{--  create new model starts --}}
            <form action="{{URL::to('/Modelfeaturedump/store')}}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
            <div class="container-fluid">
                <h1>New Model </h1>
                <br>
                <br>
                
                <div class="table_section">
                    <table>
                                <thead style="background-color:#FCF5D8;">
                                    <tr>
                                        <th>id</th>
                                        <th >Products</th>
                                        <th >OEM_name</th>
                                        <th >model_name</th>
                                        <th >feature_name</th>
                                        <th >Featurevalues</th>
                                        <th >Modelimage</th>
                                        <th >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Modelfeaturedumps as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->Products}}</td>
                                        <td>{{ $item->OEM_name}}</td>
                                        <td>{{ $item->model_name}}</td>
                                        <td>{{ $item->feature_name}}</td>
                                        <td>{{ $item->Featurevalues}}</td>
                                        <td>{{ $item->Modelimage}}</td>
                                        <td>
                                            <button class="btn btn-success btn-sm">Delete</button>
                                            <button class="btn btn-danger btn-sm">Edit</button>
                                        </td>
                                    </tr>    
                                    @endforeach
                                </tbody>

                    </table>
                </div>
                </form>
        </div>
        <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
    </section>

{{--  create new model ends --}}


    {{--  bootstrap js files  --}}
  <script type="text/javascript" src="{{ URL('public/js/bootstrap.bundle.js') }}"></script>
 <script type="text/javascript" src="{{ URL('public/js/bootstrap.bundle.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('public/js/bootstrap.esm.js') }}"></script>
 <script type="text/javascript" src="{{ URL('public/js/bootstrap.esm.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('public/js/bootstrap.js') }}"></script>
 <script type="text/javascript" src="{{ URL('public/js/bootstrap.min.js') }}"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>

</body>
</html>
@stop