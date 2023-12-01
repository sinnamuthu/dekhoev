@include('admin_header')
<div class="content-wrapper">
{{--  create new model starts --}}
    <section class="section_admin new_model">
        <div class="container-fluid ">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alart alart-danger" role="alert">
                                <strong>Sorry!</strong> Here have some issue please check<br><br>
                                {{$error}}
                            </div>
                        @endforeach
                     @endif  

                 <!--<form action="{{URL::to('/NewModel/store/')}}" method="POST" enctype="multipart/form-data">-->
                 <!--@if(Session::get('cate'))-->
                 <!--<input type = 'hidden' name='cur_model' id='cur_model'>-->
                 <!--  <h3> {{Session()->get('cate')}}</h3>-->
                 <!--  @endif-->
                <div class="create_new_model">
                    <h2 class="text-center">Create a New Model</h2>
                    <h3></h3>
                </div>
                @if(session('success'))
                        <div class="alert alert-success">
                             {{ session('success') }}
                        </div> 
                    @endif
                <div class="feature my-5">
                    
                    <!--Model Name-->
                    <form action="{{URL::to('/NewModel/store/')}}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="card p-5 my-3" id="card1">
                            <div class="row oem_name">
                                <div class="col-4">
                                    <h3 class="text-center">Select OEM Brand</h3>
                                </div>
                                <div class="col-4">
                                    <select name="OEM_name" id="oem_name" placeholder="Select OEM Name" required>
                                        <option class="text-center" value="" > Select OEM Brand</option> 
                                     @foreach ($usersc as $userc)
                                        <option  class="text-center" required>{{ $userc->new_oem_name }}</option>   
                                    @endforeach
                                    </select>
                                 </div>
                                <!-- <div class="col-3">
                                    <h3 class="text-center">Enter Model Name</h3>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="model_name" id="model_name" id="frown" placeholder="Enter Model Name" >
                                </div> -->
                               <div class="col-3">
                                    <input type="text"  hidden="true" name="Status" id="Status" >
                                </div>
                               <form action="{{URL::to('/NewModel/store')}}" method="POST" enctype="multipart/form-data">
                                    {!! csrf_field() !!}  
                                    <center><button class="btn btn-warning my-3" id="frow" onclick="add()" style="width:30%;">Add</button></center>
                                </form>
                            </div>
                        </div>
                    </form>
                    <!--Fewture Master-->
                    
                    <div class="" style="dispaly:none;">
                    
                    
                       <form action="{{URL::to('/Fourwheelerspecsfeature/store')}}" method="POST" enctype="multipart/form-data">
                           {!! csrf_field() !!}
                    
                            @if(Session::get('OEM_name'))
                                <input type="hidden" name="OEM_name" id="OEM_name" value="{{Session()->get('OEM_name')}}">
    		                @endif
                    <!--start-->
                    @foreach($users as $user)
                            <div class="card pb-3 px-2 my-3" id="card2">
                                <div class="row my-5 ">
                                    
                                    <div class="col-3 ">
                                        @if(Session::get('OEM_name'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> OEM Brand </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('OEM_name')}}</h5>
                                         @endif
                                    </div>
                                            
                                    <div class="col-3" >
                                      
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature1">{{$user->Feature_Name}}</h5>
                                    </div>
                                    <div class="col-3">
                                       <lable ><h6>Unit Of Measurement</h6> </lable>
                                       <h6 style="background-color:#ebf2ec" class="px-3 py-2" name="unit_measurement">{{$user->Unit_of_Measurement}}</h6>
                                    </div>
                                    
                                    <div class="col-3">
                                        @php
                                        
                                        $fn = $user->Input_Types;
                                        $fs = $user->Feature_Name;
                                        
                                        $fs = str_replace(" ","_",$fs);
                                        $fs = str_replace("&","",$fs);
                                        $fs = str_replace("/","",$fs);
                                        $fs = str_replace("@","",$fs);
                                        $fs = str_replace("-","_",$fs);
                                        $fs = str_replace("(","_",$fs);
                                        $fs = str_replace(")","_",$fs);
                                        $fs = str_replace("{","_",$fs);
                                        $fs = str_replace("}","_",$fs);
                                        $fs = str_replace("[","_",$fs);
                                        $fs = str_replace("]","_",$fs);
                                        $fs = str_replace("'","_",$fs);
                                        $fs = str_replace("%","_",$fs);
                                        $fs = str_replace("?","_",$fs);
                                        $fs = str_replace("!","_",$fs);
                                        $fs = str_replace("*","_",$fs);
                                        $fs = str_replace("<","_",$fs);
                                        $fs = str_replace(">","_",$fs);
                                        $fs = str_replace("#","_",$fs);
                                        $fs = str_replace("~","_",$fs);  
                                        $fs = str_replace(":","_",$fs);
                                        $fs = str_replace(";","_",$fs);
                                        $fs = str_replace(",","_",$fs);
                                        $fs = str_replace("+","_",$fs);
                                        $fs = str_replace("$","_",$fs);
                                        $fs = str_replace("^","_",$fs);
                                        $fs = str_replace("`","_",$fs);
                                        if ($fn==''){
                                        
                                        echo '<input type="text"  name='.$fs.'>';
                                        
                                        }
                                        
                                        if ($fn=='Textbox'){
                                        echo '<input type="text"  name='.$fs.'>';
                                        }
                                        
                                        
                                        
                                        if ($fn == 'Dropdown'){
                                    @endphp
                                        <select name=
                                        
                                        @php
                                        
                                        echo $fs;
                                        
                                        @endphp
                                        
                                        id="value" placeholder="Select Value" >
                                        <option class="text-center" value="" > Select Value</option>
                                     
                                     @php
                                     
                                     $fg = $user->Dropdown_Values;
                                     
                                     $fg = explode("/",$fg);
                                     
                                     foreach ($fg as $fg){
                                     
                                     echo '   <option  class="text-center"  value = "'.$fg.'"    required>'.$fg.'</option>';
                                    }
                                    
                                    @endphp
                                    </select>
                                    
                                    @php
                                    
                                        }
                                        
                                        
                                        @endphp
                                       
                                    </div>
                                </div> 
                            </div>
                            @endforeach
                            <!-- <div class="card py-2 my-3" id="FAQ1">
                                <div class="col-3">
                                        <h4 class="text-center">Question 1</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Question1" id="Question1" id="frown" placeholder="Enter Text..." rows="1" cols="100"  ></textarea>
                                </div>
                                <div class="col-3">
                                        <h4 class="text-center">Answer 1</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Answer1" id="Answer1" id="frown" placeholder="Enter Text..." rows="1" cols="100"  ></textarea>
                                </div>
                            </div>
                            <div class="card py-2 my-3" id="FAQ2">
                                <div class="col-3">
                                        <h4 class="text-center">Question 2</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Question2" id="Question2" id="frown" placeholder="Enter Text..." rows="1" cols="100"  ></textarea>
                                </div>
                                <div class="col-3">
                                        <h4 class="text-center">Answer 2</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Answer2" id="Answer2" id="frown" placeholder="Enter Text..." rows="1" cols="100"  ></textarea>
                                </div>
                            </div>
                            <div class="card py-2 my-3" id="FAQ3">
                                <div class="col-3">
                                        <h4 class="text-center">Question 3</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Question3" id="Question3" id="frown" placeholder="Enter Text..." rows="1" cols="100"  ></textarea>
                                </div>
                                <div class="col-3">
                                        <h4 class="text-center">Answer 3</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Answer3" id="Answer3" id="frown" placeholder="Enter Text..." rows="1" cols="100"  ></textarea>
                                </div>
                            </div> -->
                             <!-- <div class="card py-2 my-3" id="FAQ4">
                                <div class="col-3">
                                        <h4 class="text-center">Question 4</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Question4" id="Question4" id="frown" placeholder="Enter Text..." rows="1" cols="100"  ></textarea>
                                </div>
                                <div class="col-3">
                                        <h4 class="text-center">Answer 4</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Answer4" id="Answer4" id="frown" placeholder="Enter Text..." rows="1" cols="100"  ></textarea>
                                </div>
                            </div>
                            <div class="card py-2 my-3" id="FAQ5">
                                <div class="col-3">
                                        <h4 class="text-center">Question 5</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Question5" id="Question5" id="frown" placeholder="Enter Text..." rows="1" cols="100"  ></textarea>
                                </div>
                                <div class="col-3">
                                        <h4 class="text-center">Answer 5</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Answer5" id="Answer5" id="frown" placeholder="Enter Text..." rows="1" cols="100"  ></textarea>
                                </div>
                            </div> -->

                            <!-- <div class="card py-2 my-3" id="Highlights">
                                <div class="col-3">
                                        <h4 class="text-center">Highlights</h4>
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="Highlights" id="Highlights" id="frown" placeholder="Enter Text..." rows="3" cols="100"  ></textarea>
                                </div>
                            </div> -->

                                <div class="card py-2 my-3" id="Highlights">
                                <div class="col-3">
                                    
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="productdesc" id="productdesc" placeholder="Product Description" id="frown" rows="3" cols="100"  ></textarea>
                                </div>
                            </div>

                                                            
                            <div class="card py-2 my-3" id="card79" style="height:100px;">
                                <div class="row my-5" style="position:relative;bottom:40px;" >
                                    <div class="col-6">
                                         <div class="input-group mb-3 ">
                                            <input type="file" class="form-control mx-3" name="Modelimage" id="inputGroupFile02" value="">
                                            <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label></div>                                            
                                        </div>
                                        <p style="color:blue;">Note :Should upload only jpeg,png,svg,jpg. Dimension 400px X 400px and  maxsize:100kb </p>
                                    </div>
                                </div>

                                   <div class="card py-2 my-3" id="Highlights">
                                <div class="col-3">
                                        
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="altimageget" id="altimageget" placeholder="Alt Image" id="frown" rows="3" cols="100"  ></textarea>
                                </div>
                            </div> 
 

                                <div class="card py-2 my-3" id="card80" style="height:100px;">
                                <div class="row my-5" style="position:relative;bottom:40px;" >
                                    <div class="col-6">
                                         <div class="input-group mb-3 ">
                                            <input type="file" class="form-control mx-3" name="Front_Modelimage" id="inputGroupFile02" value="">
                                            <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label></div>
                                        </div>
                                        <p style="color:blue;">Note :Should upload only jpeg,png,svg,jpg. Dimension 400px X 400px and  maxsize:100kb </p>
                                    </div>
                                </div>

                                   <div class="card py-2 my-3" id="Highlights">
                                <div class="col-3">
                                       
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="altimageget2" id="altimageget2" placeholder="Alt Image" id="frown" rows="3" cols="100"  ></textarea>
                                </div>
                            </div> 


                                <div class="card py-2 my-3" id="card81" style="height:100px;">
                                <div class="row my-5" style="position:relative;bottom:40px;" >
                                    <div class="col-6">
                                         <div class="input-group mb-3 ">
                                            <input type="file" class="form-control mx-3" name="Back_Modelimage" id="inputGroupFile02" value="">
                                            <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label></div>                                            
                                        </div>
                                        <p style="color:blue;">Note :Should upload only jpeg,png,svg,jpg. Dimension 400px X 400px and  maxsize:100kb </p>
                                    </div>
                                </div>

                                   <div class="card py-2 my-3" id="Highlights">
                                <div class="col-3">
                                      
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="altimageget3" id="altimageget3" placeholder="Alt Image" id="frown" rows="3" cols="100"  ></textarea>
                                </div>
                            </div> 


                                <div class="card py-2 my-3" id="card82" style="height:100px;">
                                <div class="row my-5" style="position:relative;bottom:40px;" >
                                    <div class="col-6">
                                         <div class="input-group mb-3 ">
                                            <input type="file" class="form-control mx-3" name="Leftside_Modelimage" id="inputGroupFile02" value="">
                                            <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label></div>                                            
                                        </div>
                                        <p style="color:blue;">Note :Should upload only jpeg,png,svg,jpg. Dimension 400px X 400px and  maxsize:100kb </p>
                                    </div>
                                </div>

                                   <div class="card py-2 my-3" id="Highlights">
                                <div class="col-3">
                                        
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="altimageget4" id="altimageget4" placeholder="Alt Image" id="frown" rows="3" cols="100"  ></textarea>
                                </div>
                            </div> 


                                <div class="card py-2 my-3" id="card83" style="height:100px;">
                                <div class="row my-5" style="position:relative;bottom:40px;" >
                                    <div class="col-6">
                                         <div class="input-group mb-3 ">
                                            <input type="file" class="form-control mx-3" name="Rightside_Modelimage" id="inputGroupFile02" value="">
                                            <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label></div>                                            
                                        </div>
                                        <p style="color:blue;">Note :Should upload only jpeg,png,svg,jpg. Dimension 400px X 400px and  maxsize:100kb </p>
                                    </div>
                                </div>

                                   <div class="card py-2 my-3" id="Highlights">
                                <div class="col-3">
                                       
                                </div>
                                <div class="col-3">
                                        <textarea type="text" name="altimageget5" id="altimageget5" placeholder="Alt Image" id="frown" rows="3" cols="100"  ></textarea>
                                </div>
                            </div> 


                            </div>
                            <center><button type="submit" class="btn btn-success mt-2 mx-5 " id="save_model" style="width:30%;">Save</button></center>
                        
                    
                        </form>
                        
                    
                        <!--end-->
                        <!--<form action="{{URL::to('/Fourwheelerspecsfeature/index/')}}" method="GET" enctype="mulipart/form-data" >-->
                        <!--    {!! csrf_field() !!}-->
                        <!--    <center><button type="submit" class="btn btn-info mt-2 mx-5 " id="save_model" style="width:30%;">4W Specs</button></center>-->
                        <!--</form>    -->
                         <!-- <div class="text-center mt-5">
                            <a href="{{URL::to('/Fourwheelerspecsfeature/index')}}" title="View 4W Specs"><button class="btn btn-success btn-sm">4W Specs</button></a>
                        </div>  -->
                    </div>
                </div>
            <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 ">Return To Admin Screen</button></a></center>
        </div>
    </section>

{{--  create new model ends --}}


</div>
<script>
    function passv(){
        // alert('2 wheeler');
        $.ajax({
               type:'POST',
               url:'/get2w',
               data:'',
               success:function(data) {
                //   $("#msg").html(data.msg);
                alert (data);
               }
            });
    }
</script>
<script>
// $('#model_name').change(function() {
    
//     var value=document.getElementById('model_name');
//     alert (value);
//     // if (value == 1) {
//     //   $("#text-field").append('<input id="value" name="value" placeholder="enter value">')
//     // } else {
//     //   $("#value").remove();
//     // }
//   });
  
 </script>
 
 <script>
     function showcard(){
        document.getElementById('card2').style.display = "block";
        document.getElementById('next2').style.display = "block";
        document.getElementById('card1').style.display = "none";
        document.getElementById('next1').style.display = "none";
     }
         function showcard1(){
            document.getElementById('card3').style.display = "block";
            document.getElementById('card2').style.display = "none";
            document.getElementById('next2').style.display = "none";
            document.getElementById('model_submit').style.display = "block";
     }
    //  function add(){
    //       document.getElementById('card1').style.display = "none";
    //  }
 </script>
 <script>
// $('#model_name1').change(function() {
//     if (this.value == '') {
//       $("#content").append('<input id="test" name="Featurevalues" placeholder="enter value">')
//     } else {
//       $("#test").remove();
//     }
//   });
// $('#model_name1').change(function() {
//     if (this.value == 'yes') {
//         $("#test").remove();
//     } 
//     else if (this.value == 'no') {
//         $("#test").remove();
//     } 
//   });
  </script>