@include('admin_header')
<div class="content-wrapper">
{{--  create new feature in feature master  starts --}}
<form action="{{URL::to('/NewFeature/store')}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <section class="new_feature ">
        <div class="container mb-5">
            <div class="create_new_feature">
                <h2 class="text-center">Create New Feature in Feature Master</h2>
                <!-- <h3 class="text-center my-5 add_feature"><i class="fa-solid fa-plus plus_icon mx-2" onclick="addfeature()"></i>Add New Feature</h3> -->
            </div>
            <div class="add_new_feature" id="add_feature" >
                @if(session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div> 
                @endif
                <div class="row my-5">
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <h2 class="text-center">Feature Name</h2>
                    </div>
                    <div class="col-4">
                        <input type="text" id="Feature_Name" name="Feature_Name" placeholder="Enter text" maxlength="100">
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
                        <input type="text" id="Feature_Description" name="Feature_Description" placeholder="Enter text" maxlength="100">
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
                        <!-- <p>If you should enter text here. Don't Enter These String, Text, Dropdown Values </p>                     -->
                        <input type="text" id="Unit_of_Measurement" name="Unit_of_Measurement" placeholder="Enter Unit of measurement">                        
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
                    <div class="col-4">
                        <select id="Input_Types" name="Input_Types" >
                            <option id="" name="Input_Types" value="Textbox">Select input type</option>
                            <!--<option id="" name="Input_Types" value="Date">Date</option>-->
                            <option id="" name="Input_Types" value="Textbox">Text box</option>
                            <option id="" name="Input_Types" value="Dropdown">Dropdown</option>
                        </select>
                    </div>
                    <div class="col-2">
                    </div>
                </div>
                <div  class="row my-5">
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <h2 class="text-center">Dropdown Values</h2>
                    </div>
                    <div class="col-4">
                         <div id="content"></div>
                    </div>
                    <div class="col-2">
                    </div>
                     <div class="col-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <center>
                            <div class="input-group mb-3">
                            <input type="file" class="form-control" name="Featureimage" id="inputGroupFile02" value="upload image/data" >
                            <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label></div>
                            <p style="text-color:blue">Note :Should upload only jpeg,png,svg,jpg and maximum size:100kb </p>
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
                <center><a href=" "><button Value="Save" class="btn btn-warning my-3">Submit</button></a></center> 
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
        function adddropdownlist(){
        document.getElementById("adddropdownlist").style.display = 'block';
    }
</script>
<script>
$('#Input_Types').change(function() {
    if (this.value == 'Dropdown') {
      $("#content").append('<h6 id="test">Please Enter forward slash symbol(/) after each Dropdown values.. </h6><input type="text" id="Dropdown_Values1" name="Dropdown_Values" placeholder="Enter Dropdown Values">')
    } else {
      $("#Dropdown_Values1").remove();
      $("#test").remove();
    }
  });
  </script>
