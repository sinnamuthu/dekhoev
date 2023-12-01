@include('admin_header')
<div class="content-wrapper">
{{--  create new feature in feature master  starts --}}
<form action="{{URL::to('/NewFeature/update')}}/{{$Newfeature->id}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
  @method("POST")
    <section class="new_feature ">
        <div class="container mb-5">
            <div class="create_new_feature">
                <h2 class="text-center">Edit Feature in Feature Master</h2>
                <!-- <h3 class="text-center my-5 add_feature"><i class="fa-solid fa-plus plus_icon mx-2" onclick="addfeature()"></i>Edit Feature</h3> -->
            </div>
            <div class="add_new_feature" id="add_feature" >
                @if(session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div> 
                @endif
                <div class="row my-5">
                    <div class="col-2">
                         <input type="hidden" name="id" id="id" value="{{$Newfeature->id}}">
                    </div>
                    <div class="col-4">
                        <h2 class="text-center">Feature Name</h2>
                    </div>
                    <div class="col-4">
                        <input type="text" id="Feature_Name" name="Feature_Name" value="{{$Newfeature->Feature_Name}}"  placeholder="Enter text" maxlength="100">
                    </div>
                    <div class="col-2">
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <h2 class="text-center">Feature Description</h2>
                    </div>
                    <div class="col-4">
                        <input type="text" id="Feature_Description" name="Feature_Description" value="{{$Newfeature->Feature_Description}}" placeholder="Enter text" maxlength="100">
                    </div>
                    <div class="col-2">
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <h2 class="text-center">Unit of Measurement</h2>
                    </div>
                    <div class="col-4">
                        <input type="text" id="Unit_of_Measurement" name="Unit_of_Measurement" value="{{$Newfeature->Unit_of_Measurement}}" placeholder="Enter Unit of measurement">
                    </div>
                    <div class="col-2">
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <h2 class="text-center">Input Types</h2>
                    </div>
					
					
					@if($Newfeature->Input_Types=="Textbox")
                    <div class="col-4">
                        <select id="Input_Types" name="Input_Types" value="Textbox"  >
                            <option  id="Input_Types" name="Input_Types" value="Textbox" >Textbox</option>                            
                            <option id="Input_Types" name="Input_Types" value="Dropdown" >Dropdown</option>
                        </select>
                    </div>
					@endif
					@if($Newfeature->Input_Types=="Dropdown")
					<div class="col-4">
                        <select id="Input_Types" name="Input_Types"  >
                            <option  id="Input_Types" name="Input_Types" >Dropdown</option>
                            <option id="Input_Types" name="Input_Types" value="Textbox">Text box</option>                            
                        </select>
                    </div>
					@endif
                    <div class="col-2">
                </div>
                
                @foreach($user as $users)
                <div  class="row my-5">
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <h2 class="text-center">Dropdown Values</h2>
                    </div>
                    <div class="col-4">
                        <div id="content">
                            <!--<input id="content" type="text" value="{{ $users->Dropdown_Values}}">-->
                            @php
                                      
                                     $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 $id = $Newfeature->id;
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                            $sql = "SELECT * FROM newfeaturemasters WHERE id='$id'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {
                                                $dropvalue=$row1['Dropdown_Values'];
												
                                        }}

                            if($Newfeature->Input_Types=='Textbox'){
                                echo'<input  type="hidden" id="Textbox" name="Input_Types" value="Textbox">';
                            }
                            
                            if($Newfeature->Input_Types=='Dropdown'){

                                    echo'
                                    <div id="drpdown">
                                        <h6 id="test">Please Enter forward slash symbol(/) after each Dropdown values.. </h6>
                                        <input type="text" id="Dropdown_Values" name="Dropdown_Values"  value='.$dropvalue.'  placeholder="Enter Dropdown Values">
                                    </div>
                                    ';
                            }
                                
                            @endphp
                        </div>
                    </div>
                    <div class="col-2">
                    </div>
                     <div class="col-2">
                    </div>
                </div>
                @endforeach
                </div>
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <center>
                            <div class="input-group mb-3">
                            <input type="file" class="form-control" name="Featureimage" id="inputGroupFile02" value="">
                           <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Icon</label></div>
                           <p style="text-color:blue">Note :Should upload only jpeg,png,svg,jpg and maximum size:100kb </p>
                           <img src="{{url('/UploadImages/NewFeatureMaster/'.$Newfeature->Featureimage)}}" class="img-thumbnail"  width="150" height="150" alt="image">
                        </center>
                    </div>
                    <div class="container">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alart alart-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif    
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <center><button Value="Save" class="btn btn-warning my-3">Update</button></center> 
            </div>
        </div>
    </section>    
</form>

<!--<form action="{{url('/NewFeature/index/')}}" method="GET">-->
<!--    {!! csrf_field() !!}-->
<!--    <center><a href="{{url('/NewFeature/index/')}}"><button  class="return_admin_button my-5 ">Back</button></a></center>-->
<!--</form>-->
<center><a href="{{url('/home')}}"><button  class="return_admin_button my-1">Return To Admin Screen</button></a></center>
</div>
<script>
    function addfeature(){
        document.getElementById("add_feature").style.display = 'block';
    }
</script>
<script>
$('#Input_Types').change(function() {
    if (this.value == 'Dropdown') {
      $("#content").append('<h6 id="test">Please Enter forward slash symbol(/) after each Dropdown values.. </h6><input type="text" id="Dropdown_Values1" name="Dropdown_Values" value="{{ $users->Dropdown_Values}}" placeholder="Enter Dropdown Values">')
      $("#drpdown").remove();
    } else {
      $("#Dropdown_Values1").remove();
      $("#test").remove();
      $("#drpdown").remove();
    }
  });
  </script>
