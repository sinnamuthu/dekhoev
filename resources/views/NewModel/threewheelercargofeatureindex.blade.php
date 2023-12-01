@include('admin_header')
<div class="content-wrapper">
{{--  create new starts --}}
            <div class="container-fluid">
                <h1>3W Cargo </h1>
                <br>
                <br>
                <form action="URL::to{{('/Threewheelercargofeature/store')}}" method="POST" enctype="mulipart/form-data">
                    {!! csrf_field() !!}
                <div class="table_section">
                @if(session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div> 
                @endif
                    <table >
                                <thead>
                                    <tr>
                                        <th >Slno</th>
					                    <th >OEM Brand</th>
                                        <th >Model Description</th>
                                        <th >Status</th>
                                        <th>Image (Image deletion facility is available here)</th>
                                        <th >Show</th>
                                        <th >Edit</th>
                                        <th >Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Threewheelercargofeature  as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
					                    <td >{{ $item->OEM_name}}</td>
					                    <td >{{ $item->Model_Description}}</td>
                                        @if($item->Status=="Active")
                                        <!-- <td ><a href="{{URL::to('/Threewheelercargofeature/Active')}}/{{ $item->id}}"><button type="submit"  class="btn btn-success btn-sm" >Active</button></a></td> -->
                                        <td ><a href="{{URL::to('/Threewheelercargofeature/Active')}}/{{ $item->id}}" class="btn btn-success  btn-sm">Active</a></td >
                                        @endif
                                        @if($item->Status=="InActive")
                                        <!-- <td ><a href="{{URL::to('/Threewheelercargofeature/InActive')}}/{{ $item->id}}"><button  type="submit"  class="btn btn-danger btn-sm" >In Active</button></a></td> -->
                                        <td ><a href="{{URL::to('/Threewheelercargofeature/InActive')}}/{{ $item->id}}" class="btn btn-danger  btn-sm">InActive</a></td >
                                        @endif
                                        @if($item->Status=="")
                                        <!-- <td ><a href="{{URL::to('/Threewheelercargofeature/InActive')}}/{{ $item->id}}"><button type="submit"  class="btn btn-danger btn-sm" >In Active</button></a></td> -->
                                        <td ><a href="{{URL::to('/Threewheelercargofeature/InActive')}}/{{ $item->id}}" class="btn btn-danger  btn-sm">InActive</a></td >
                                        @endif
                                        <td>
                                            @if($item->Modelimage=="")
                                            <img src="{{ url('/UploadImages/NewModel/Threewheelercargofeature/3WC.png')}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                            @endif
                                            @if ($item->Modelimage<>"")
                                            <a href="{{URL::to('/Threewheelercargofeature/Modelimage_delete')}}/{{$item->id}}" onclick="return confirm(&quot;Do you want really delete this image?&quot;)" > <img src="{{url('/UploadImages/NewModel/Threewheelercargofeature/'. $item->Modelimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image"> </a>
                                            @endif
                                            @if($item->Front_Modelimage=="")
                                            <img src="{{ url('/UploadImages/NewModel/Threewheelercargofeature/3WC.png')}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                            @endif
                                            @if ($item->Front_Modelimage<>"")
                                            <a href="{{URL::to('/Threewheelercargofeature/Front_Modelimage')}}/{{$item->id}}" onclick="return confirm(&quot;Do you want really delete this image?&quot;)" ><img src="{{url('/UploadImages/NewModel/Threewheelercargofeature/'. $item->Front_Modelimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image"></a>
                                            @endif
                                            @if($item->Back_Modelimage=="")
                                            <img src="{{ url('/UploadImages/NewModel/Threewheelercargofeature/3WC.png')}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                            @endif
                                            @if($item->Back_Modelimage<>"")
                                            <a href="{{URL::to('/Threewheelercargofeature/Back_Modelimage')}}/{{$item->id}}" onclick="return confirm(&quot;Do you want really delete this image?&quot;)" ><img src="{{url('/UploadImages/NewModel/Threewheelercargofeature/'. $item->Back_Modelimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image">  </a>
                                            @endif
                                            @if($item->Leftside_Modelimage=="")
                                            <img src="{{ url('/UploadImages/NewModel/Threewheelercargofeature/3WC.png')}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                            @endif
                                            @if($item->Leftside_Modelimage<>"")
                                            <a href="{{URL::to('/Threewheelercargofeature/Leftside_Modelimage')}}/{{$item->id}}" onclick="return confirm(&quot;Do you want really delete this image?&quot;)" > <img src="{{url('/UploadImages/NewModel/Threewheelercargofeature/'. $item->Leftside_Modelimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image"></a>
                                            @endif
                                            @if($item->Rightside_Modelimage=="")
                                            <img src="{{ url('/UploadImages/NewModel/Threewheelercargofeature/3WC.png')}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                            @endif
                                            @if($item->Rightside_Modelimage<>"")
                                            <a href="{{URL::to('/Threewheelercargofeature/Rightside_Modelimage')}}/{{$item->id}}" onclick="return confirm(&quot;Do you want really delete this image?&quot;)" ><img src="{{url('/UploadImages/NewModel/Threewheelercargofeature/'. $item->Rightside_Modelimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image"></a>
                                            @endif
                                        </td>
                                        <td ><a href="{{URL::to('/Threewheelercargofeature/show')}}/{{ $item->id}}" class="btn btn-info btn-sm">Show</a></td>
                                        <td ><a href="{{URL::to('/Threewheelercargofeature/edit')}}/{{ $item->id}}" class="btn btn-info btn-sm">Edit</a></td>
                                        <td ><a href="{{URL::to('/Threewheelercargofeature/delete')}}/{{ $item->id}}" onclick="return confirm(&quot;Confirm delete?&quot;)" class="btn btn-danger btn-sm">Delete</a></td>
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


</div>
