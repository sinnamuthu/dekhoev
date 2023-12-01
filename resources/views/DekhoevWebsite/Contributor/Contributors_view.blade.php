@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/icon.png">
    <title>Contributors Comments </title>
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
		<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
</head>
<body class="section_admin">
{{--  create Contributors Comments  starts --}}
            <div class="container-fluid">
                <h1>Contributors Comments </h1>
                <br>
                <br>
                <div class="table_section">
                    <table >
                                <thead>
                                    <tr>
                                        <!--<th>Slno</th>-->
                                        <th >Products</th>
                                        <th >Model Name</th>
                                        <th >Name</th>
                                        <th >Email</th>
                                        <th >Mobile Number</th>
                                        <th >Message</th>
                                        <!--<th >Vehicle Registration No</th>-->
                                        <!-- <th >View Comments </th> -->
                                        <th >Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contributors as $item)
                                    <tr>
                                        <!--<td>{{ $item->id}}</td>-->
                                        <td >{{ $item->Products}}</td>
                                        <td >{{ $item->Model_Name}}</td>
                                        <td >{{ $item->Name}}</td>
                                        <td >{{ $item->Mobile_Number}}</td>
                                        <td >{{ $item->Email}}</td>
                                        <td >{{ $item->Message}}</td>
                                        <!--<td >{{ $item->Vehicle_Registration_No	}}</td>-->
                                        <!-- <td ><a href="{{ URL::to('/Website/Feedback/view') }}/{{$item->id}}" title="View Feedback"><button class="btn btn-info btn-sm"></i> View</button></a> </td> -->
                                        <td>
                                        <form  method="GET" action="{{URL::to('/contributors/delete')}}/{{ $item->id}}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }} 
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Feature" onclick="return confirm( &quot;Confirm delete feedback?&quot;) "> Delete</button>
                                        </form>
                                        </td>
                                        
                                        
                                    </tr>      
                                    @endforeach
                                </tbody>
                    </table>
                </div>
        </div>
        <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
    </section>

{{--  create Contributors Comments   ends --}}


    {{--  bootstrap js files  --}}
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap1.min.js"></script>
        <script type="text/javascript" src="../js/common.js"></script>
        <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="../js/slick.min.js"></script>
 


</body>
</html>
@stop