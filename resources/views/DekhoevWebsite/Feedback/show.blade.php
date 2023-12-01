
@include('admin_header')
<div class="content-wrapper">
    <h1>Customer Feedbacks </h1>
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
                    <th >Subject</th>
                    <th >Feedback Comments</th>
                    <th >View Comments </th>
                    <th >Delete</th>

                </tr>
            </thead>
            <tbody>
                @foreach($Feedback as $item)
                <tr>
                    <!--<td>{{ $item->id}}</td>-->
                    <td >{{ $item->Products}}</td>
                    <td >{{ $item->Model_Name}}</td>
                    <td >{{ $item->Name}}</td>
                    <td >{{ $item->Mobile_Number}}</td>
                    <td >{{ $item->Email}}</td>
                    <td >{{ $item->Subject}}</td>
                    <td >{{ $item->Feedbackcomments}}</td>
                    <td ><a href="{{ URL::to('/Feedback/view') }}/{{$item->id}}" title="View Feedback"><button class="btn btn-info btn-sm"></i> View</button></a> </td>
                    <td>
                    <form  method="GET" action="{{URL::to('/Feedback/delete')}}/{{ $item->id}}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }} 
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Feature" onclick="return confirm(&quot;Confirm delete feedback?&quot;)"> Delete</button>
                    </form>
                    </td>
                    
                    
                </tr>      
                @endforeach
            </tbody>
        </table>
    </div>
    <center><a href="/home"><button  class="return_admin_button  my-3">Return To Admin Screen</button></a></center>
</div>

