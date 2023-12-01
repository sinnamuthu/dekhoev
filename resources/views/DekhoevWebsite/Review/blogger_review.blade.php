@include('admin_header')
<div class="content-wrapper">
<div class="container-fluid">

<h1> Blogger Comments </h1>
<br>
<div class="table_section">
   <table >
        <thead>
            <tr>
                <!-- <th >Slno</th> -->
                <th >Products</th>
                <th >Model Name</th>
                <th >Message</th>
                <th>Pickup</th>
                <th>Ease of Driving</th>
                <th>Range</th>
                <th>Time to Charge</th>
                <th>Price Value for Money</th>
                <th>Averege</th>
                <th >Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ratings as $item)
            <tr>
                <!-- <td >{{ $item->id}}</td> -->
                <td >{{ $item->Products}}</td>
                <td >{{ $item->Model_Name}}</td>
                <td >{{ $item->Message}}</td>
                <td>{{ $item->Pickup}}   Ratings</td>
                <td>{{ $item->Ease_of_driving}}  Ratings</td>
                <td>{{ $item->Ranges}}  Ratings</td>
                <td>{{ $item->Time_to_Change}}  Ratings</td>
                <td>{{ $item->Price_value_for_money}}   Ratings</td>
                <td>{{ $item->Average}}   Ratings</td>
                <td>
                <form  method="GET" action="{{('/ratings_review/delete')}}/{{ $item->id}}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }} 
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete " onclick="return confirm(&quot;Confirm delete Review?&quot;)"> Delete</button>
                </form>
                </td>
            </tr>      
            @endforeach
        </tbody>
   </table>
</div>
</div>
<center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
</div>
