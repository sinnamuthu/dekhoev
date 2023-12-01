@include('admin_header')
<div class="content-wrapper">
    <div class="container-fluid">
        <h1 class="text-center">Meta Tags</h1>
        <br>
        @if(session('Success'))
            <div class="alert alert-success">
                {{ session('Success') }}
            </div> 
        @endif
        <br>         
        <div class="row">
            <!-- <div class="col-6">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <a href="{{URL::to('/Post/create')}}" class="btn btn-success btn-sm"><h4>Create New Posts</h4></a>
                        </div>
                    </div>
                </form>
            </div> -->
            <!-- <div class="col-6">  
                <form action="/post_search_table" method="GET"> 
                    <div class="row">
                        <div class="col-6">
                            <label>Start date</label>
                            <input type="date" class="search" name="start_date" id="start_date" required>
                        </div>
                        <div class="col-6">
                            <label>End date</label>
                            <input type="date" class="search" name="end_date" id="end_date" required>
                        </div>
                        <div class="col-3">
                            <button  class="btn btn-info my-3" >Search</button>
                        </div>
                    </div>
                </form>
                <a href="{{URL::to('/Post/index')}}"><button  class="btn btn-warning my-3" >Clear</button></a>
            </div> -->
        </div>
    </div>
    <!-- <form action="post/post_search_table" method="POST">
        @csrf -->
        
    <!-- </form> -->
    <div class="table_section my-2">
    <br>
    <br>
        <table id="post_table">
                    
            <thead>
                <tr>
                    <th >Slno</th>  
                    <th >Page Name</th>
                    <th >Title</th>
                    <th >Keyword</th>
                    <th>Description</th>
                    <th >Show</th>
                    <th >Edit</th>
                    <!-- <th >Delete</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($Meta  as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td >{{ $item->page_name}}</td>
                    <td >{{ $item->title}}</td>
                    <td >{{ $item->keyword}}</td>
                    <td >{{ $item->description}}</td> 
                    <td ><a href="{{URL::to('/Metadescription/show')}}/{{ $item->id}}" class="btn btn-info btn-sm">Show</a></td>
                    <td ><a href="{{URL::to('/Metadescription/edit')}}/{{ $item->id}}" class="btn btn-info btn-sm">Edit</a></td>
                    <!-- <td ><a href="{{URL::to('/Metadescription/delete')}}/{{ $item->id}}" onclick="return confirm(&quot;Confirm delete this post ?&quot;)" class="btn btn-danger btn-sm">Delete</a></td> -->
                </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
    </form> 
    </div>
    <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
</div>
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