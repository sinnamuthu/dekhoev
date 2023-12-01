@include('admin_header')
<div class="content-wrapper">
<div class="container-fluid">
    <h1>Show Feature </h1>
    <br>
    <br>
    <div class="table_section">
        <table >
            <thead>
                <tr>
                    <th>Slno</th>
                    <th >Products</th>
                    <th >Feature Name</th>
                    <th >Feature Description</th>
                    <th >Unit of Measurement</th>
                    <th >Image</th>
                    <th >Edit</th>
                    <th >Delete</th>

                </tr>
            </thead>
            <tbody>
                @foreach($Newfeature as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td >{{ $item->Products}}</td>
                    <td >{{ $item->Feature_Name}}</td>
                    <td >{{ $item->Feature_Description}}</td>
                    <td >{{ $item->Unit_of_Measurement}}</td>
                    <td>
                        <img src="{{url('/UploadImages/NewFeatureMaster/'. $item->Featureimage)}}" class="img-thumbnail"  width="75" height="75" alt="image">
                    </td>
                    <td> <a href="{{URL::to('/NewFeature/edit')}}/{{ $item->id}}" id ="btnEdit"   class="btn btn-info btn-sm">Edit</a></td>
                    <td>
                    <form  method="GET" action="{{('/NewFeature/delete')}}/{{ $item->id}}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }} 
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Feature" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete</button>
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
