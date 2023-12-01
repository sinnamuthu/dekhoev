@include('admin_header')
<div class="content-wrapper">
{{--  create new starts --}}
            <div class="container-fluid">
                <h1>4W Specs </h1>
                <br>
                <br>
                <div class="table_section">
                @if(session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div> 
                @endif
                    <table style="border: 1px solid black; border-collapse: collapse;"  >
                                <thead>
                                    <tr>
                                        <th>Slno</th>
                                        <th >OEM Brand</th>
					                    <th >Model Description</th>	
                                        <th>Status</th>
                                        <th>Image (Image deletion facility is available here)</th>
                                        <th>Show</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Fourwheelerspecsfeature as $item)
                                    <tr>
                                        <td >{{ $item->id}}</td>
                                        <td >{{ $item->OEM_name}}</td>
                                        <td >{{ $item->Model_Description}}</td>
                                        @if($item->Status=="Active")
                                        <td ><a href="{{URL::to('/Fourwheelerspecsfeature/Active')}}/{{ $item->id}}"><button   class="btn btn-success btn-sm" >Active</button></a></td>
                                        @endif
                                        @if($item->Status=="InActive")
                                        <td ><a href="{{URL::to('/Fourwheelerspecsfeature/InActive')}}/{{ $item->id}}"><button   class="btn btn-danger btn-sm" >In Active</button></a></td>
                                        @endif
                                        @if($item->Status=="")
                                        <td ><a href="{{URL::to('/Fourwheelerspecsfeature/InActive')}}/{{ $item->id}}"><button   class="btn btn-danger btn-sm" >In Active</button></a></td>
                                        @endif
                                        <td>
                                            @if($item->Modelimage=="")
                                            <img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                            @endif
                                            @if ($item->Modelimage<>"")
                                            <a href="{{URL::to('/Fourwheelerspecsfeature/Modelimage_delete')}}/{{$item->id}}" onclick="return confirm(&quot;Do you want really delete this image?&quot;)" > <img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image"> </a>
                                            @endif
                                            @if($item->Front_Modelimage=="")
                                            <img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                            @endif
                                            @if ($item->Front_Modelimage<>"")
                                            <a href="{{URL::to('/Fourwheelerspecsfeature/Front_Modelimage')}}/{{$item->id}}" onclick="return confirm(&quot;Do you want really delete this image?&quot;)" ><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Front_Modelimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image"></a>
                                            @endif
                                            @if($item->Back_Modelimage=="")
                                            <img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                            @endif
                                            @if($item->Back_Modelimage<>"")
                                            <a href="{{URL::to('/Fourwheelerspecsfeature/Back_Modelimage')}}/{{$item->id}}" onclick="return confirm(&quot;Do you want really delete this image?&quot;)" ><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Back_Modelimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image">  </a>
                                            @endif
                                            @if($item->Leftside_Modelimage=="")
                                            <img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                            @endif
                                            @if($item->Leftside_Modelimage<>"")
                                            <a href="{{URL::to('/Fourwheelerspecsfeature/Leftside_Modelimage')}}/{{$item->id}}" onclick="return confirm(&quot;Do you want really delete this image?&quot;)" > <img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Leftside_Modelimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image"></a>
                                            @endif
                                            @if($item->Rightside_Modelimage=="")
                                            <img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" class="img-thumbnail"  width="75" height="75" alt="Image">
                                            @endif
                                            @if($item->Rightside_Modelimage<>"")
                                            <a href="{{URL::to('/Fourwheelerspecsfeature/Rightside_Modelimage')}}/{{$item->id}}" onclick="return confirm(&quot;Do you want really delete this image?&quot;)" ><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Rightside_Modelimage)}}" class="img-thumbnail"  width="75" height="75" alt="Image"></a>
                                            @endif
                                        </td>
                                        <!--<td ><a href="{{URL::to('/Fourwheelerspecsfeature/edit')}}/{{ $item->id}}"><button id ="btnstatus"  class="btn btn-info btn-sm"  value="Active">Active</button></a></td>-->
                                        <td ><a href="{{URL::to('/Fourwheelerspecsfeature/show')}}/{{ $item->id}}"><button id ="btnEdit"  class="btn btn-info btn-sm"  value="Edit">show</button></a></td>
                                        <td ><a href="{{URL::to('/Fourwheelerspecsfeature/edit')}}/{{ $item->id}}"><button id ="btnEdit"  class="btn btn-info btn-sm"  value="Edit">Edit</button></a></td>
                                        <td ><a href="{{URL::to('/Fourwheelerspecsfeature/delete')}}/{{ $item->id}}"><button id="btnDelete" onclick="return confirm(&quot;Confirm delete?&quot;)" class="btn btn-danger btn-sm"  value="Delete">Delete</button></a></td>
                                    </tr>    
                                    @endforeach
                                </tbody>
                    </table>
                </div>
        </div>
        <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
    </section>

{{--  create new  ends --}}


</div>
<script>
    const btn = document.getElementById('btnstatus');
    btn.addEventListener('click', function handleClick() {
      const initialText = 'Active';
    
      if (btn.textContent.toLowerCase().includes(initialText.toLowerCase())) {
        btn.innerHTML =
          '<span style="background-color: lime">In Active</span>';
      } else {
        btn.textContent = initialText;
      }
    });
  </script>
