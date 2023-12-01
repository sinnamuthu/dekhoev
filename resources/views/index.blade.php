@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
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
        <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.2.0/css/dataTables.dateTime.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

        {{--  font awesome cdn  --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">

</head>
<body class="section_admin">
{{--  create new starts --}}
            <div class="container-fluid">
                <h1>Posts </h1>
                <br>
                @if(session('Success'))
                    <div class="alert alert-success">
                      {{ session('Success') }}
                    </div> 
                @endif
		<br>
                <div class="row">
                    <div class="col-6">
                        <a href="{{URL::to('/Post/create')}}" class="btn btn-success btn-sm"><h4>Create New Posts</h4></a>
                    </div>
                    <div class="col-6">
                    <table border="0" cellspacing="5" cellpadding="5">
                        <tbody>
                        <tr>
                            <td>Minimum date:</td>
                            <td><input type="text" id="min" name="min" ></td>
                        </tr>
                        <tr>
                            <td>Maximum date:</td>
                            <td><input type="text" id="max" name="max" ></td>
                        </tr>
                       </tbody>
                     </table>
                    </div>
                </div>
                <div class="table_section my-2">
                <br>
                <br>
                    <table id="example">
                                
                                <thead>
                                    <tr>
                                        <th >Slno</th>  
                                        <th >Posttitle</th>
                                        <th >Postcontent</th>
                                        <th>Start date</th>
                                        <th >Postimage</th>
                                        <th >Show</th>
                                        <th >Edit</th>
                                        <th >Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Posts  as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td >{{ $item->Posttitle}}</td>
                                        <td >{{ $item->Postcontent}}</td>
                                        <td >{{ $item->Post_Date}}</td>
                                        <td>
                                            <img src="{{url('UploadImages/Post/'. $item->Postimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                        </td> 
                                        <td ><a href="{{URL::to('/Post/show')}}/{{ $item->id}}" class="btn btn-info btn-sm">Show</a></td>
                                        <td ><a href="{{URL::to('/Post/edit')}}/{{ $item->id}}" class="btn btn-info btn-sm">Edit</a></td>
                                        <td ><a href="{{URL::to('/Post/delete')}}/{{ $item->id}}" onclick="return confirm(&quot;Confirm delete this post ?&quot;)" class="btn btn-danger btn-sm">Delete</a></td>
                                    </tr>    
                                    @endforeach
                                </tbody>
                    </table>
                </div>
              </form> 
        </div>
        <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
    </section>

{{--  create new  ends --}}


    {{--  bootstrap js files  --}}
  <script type="text/javascript" src="{{ URL('../js/bootstrap.bundle.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.bundle.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.esm.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.esm.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.min.js') }}"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script>
 
 <script>
        var minDate, maxDate;
 
 // Custom filtering function which will search data in column four between two values
 $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var max = maxDate.val();
         var date = new Date( data[4] );
  
         if (
             ( min === null && max === null ) ||
             ( min === null && date <= max ) ||
             ( min <= date   && max === null ) ||
             ( min <= date   && date <= max )
         ) {
             return true;
         }
         return false;
     }
 );
  
 $(document).ready(function() {
     // Create date inputs
     minDate = new DateTime($('#min'), {
         format: 'YYYY Do MMMM'
     });
     maxDate = new DateTime($('#max'), {
         format: 'YYYY Do MMMM'
     });
  
     // DataTables initialisation
     var table = $('#example').DataTable();
  
     // Refilter the table
     $('#min, #max').on('change', function () {
         table.draw();
     });
 });
</script>


</body>
</html>
@stop