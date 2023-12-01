@include('admin_header')
<div class="content-wrapper">
{{--  create new OEM starts --}}
            <div class="container-fluid">
                <h1>OEM Feature </h1>
                <br>
                <br>
                <div class="container">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alart alart-danger" role="alert">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif    
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div> 
                @endif
                <div class="table_section">
                    <table >
                                <thead>
                                    <tr>
                                        <th>Slno</th>
                                        <th >Products</th>
                                        <th >OEM Brand Name</th>
                                        <th >OEM logo</th>
                                        <th >Edit</th>
                                        <th >Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Brandmaster as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td >{{ $item->Products}}</td>
                                        <td >{{ $item->new_oem_name}}</td>
                                        <td>
                                            <img src="{{url('/UploadImages/BrandMaster/'. $item->OEMImage)}}" class="img-thumbnail"  width="75" height="75" alt="logo">
                                        </td>
                                        <td> <a href="{{URL::to('/BrandMaster/edit')}}/{{ $item->id}}" id ="btnEdit"   class="btn btn-info btn-sm">Edit</a></td>
                                        <td>
                                        <form  method="GET" action="{{('/BrandMaster/delete')}}/{{ $item->id}}" accept-charset="UTF-8" style="display:inline">
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
    </section>

{{--  create new  ends --}}


</div>
