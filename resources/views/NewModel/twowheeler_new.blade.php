@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Model</title>
        {{--  bootstrap css styles  --}}
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-grid.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-grid.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-grid.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-grid.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-reboot.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-reboot.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-reboot.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-reboot.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-utilities.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-utilities.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-utilities.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap-utilities.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../css/custom.css') }}"/>
        <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

        <!--jquery cdn-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{--  font awesome cdn  --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">

</head>
<body class="section_admin">
{{--  create new model starts --}}
    <section class="section_admin new_model">
        <div class="container-fluid ">
                 <!--<form action="{{URL::to('/NewModel/store/')}}" method="POST" enctype="multipart/form-data">-->
                 <!--@if(Session::get('cate'))-->
                 <!--<input type = 'hidden' name='cur_model' id='cur_model'>-->
                 <!--  <h3> {{Session()->get('cate')}}</h3>-->
                 <!--  @endif-->
                <div class="create_new_model">
                    <h2 class="text-center">Create a New Model</h2>
                </div>
                <div class="feature my-5">
                    
                    <!--Model Name-->
                    <form action="{{URL::to('/NewModel/store/')}}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="card p-5 my-3" id="card1">
                            <div class="row oem_name">
                                <div class="col-3">
                                    <h3 class="text-center">Select OEM Name</h3>
                                </div>
                                <div class="col-3">
                                    <select name="OEM_name" id="oem_name" placeolder="Select OEM Name">
                                     @foreach ($usersc as $userc)
                                        <option  class="text-center">{{ $userc->new_oem_name }}</option>
                                    @endforeach
                                    </select>
                                 </div>
                                <div class="col-3">
                                    <h3 class="text-center">Enter Model Name</h3>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="model_name" id="model_name" id="frown">
                                </div>
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
                    <div id="next1">
                         <center><button class="btn btn-warning mt-2 mx-5 " onclick="showcard()"  style="width:30%;">Maximize</button></center>
                    </div>
                    
                    <!--Fewture Master-->
                    <div class="" style="dispaly:none;">
                        @foreach($users as $user)
                       <form action="{{URL::to('/Newmodelfeature/store/')}}" method="POST" enctype="mulipart/form-data">
                           {!! csrf_field() !!}
                            <div class="card pb-5 my-3" id="card2">
                                <div class="row my-5 fname">
                                    <div class="col-3">
                                        <h3 class="text-center">Features</h3>
                                    </div>
                                    <div class="col-3 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                
                                    <div class="col-3" >
                                        <input value="{{ $user->Feature_Name }}"  name="feature_name" id="feature_name">
                                        <!--<select name="feature_name" id="feature_name">-->
                                            <!--@foreach ($users as $user)-->
                                            <!--<option  class="text-center">{{ $user->Feature_Name }}</option>-->
                                            <!--@endforeach-->
                                        <!--</select>-->
                                    </div>
                                    <div class="col-3" style="position:relative;bottom:40px;" >
                                        <select name="Featurevalues" id="model_name1" >
                                            <option selected>select your field type</option>
                                            <option value="yes" class="text-center">Select Yes</option>
                                            <option value="no" class="text-center">Select No</option>
                                             <option  class="text-center" value="">Enter Value</option>
                                            <option  class="text-center">Not Sure</option>
                                        </select>
                                        <input id="test" name="Featurevalues" class="mt-1" placeholder="enter value">
                                        <!--<div id="content"></div>-->
                                        <!--<form action="{{URL::to('/Newmodelfeature/store/')}}" method="POST" >-->
                                            <!--{!! csrf_field() !!}  -->
                                            <!--{{--  <input type="text" name="value" id="enter_value">  --}}-->
                                            <button  value="save" class="btn btn-warning mt-2 Feature_add_btn " id="feature_btn" >Add</button>
                                        <!--</form>-->
                                    </div>
                                </div> 
                            </div>
                            
                        </form>
                        @endforeach
                        <center><button class="btn btn-warning mt-2 mx-5 " onclick="showcard1()" id="next2" style="width:30%; display:none;">Next</button></center>
                    </div>
                </div>
                <!--images  Upload -->
                <form action="{{URL::to('/Newmodelfeatureimage/store')}}" enctype="multipart/form-data" method="POST" >
                     {!! csrf_field() !!}
                    <div class="card py-2 my-3" id="card3" style="height:100px; display:none;">
                        <div class="row my-5" style="position:relative;bottom:40px;" >
                            <div class="col-6">
                                 <div class="input-group mb-3 ">
                                    <input type="file" class="form-control mx-3" name="Modelimage" id="inputGroupFile02" value="">
                                    <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label></div>
                                    </div>
                                    <div class="col-3">
                                     <form action="{{URL::to('/Newmodelfeatureimage/store')}}" method="POST" enctype="multipart/form-data">
                                    {!! csrf_field() !!}  
                                    <button class="btn btn-warning mt-2 Feature_add_btn " >Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                 </form>     
                <!--<center><a href="{{url('/home')}}"><button value="Save" class="btn btn-warning my-1 " style="display:none;" id="model_submit">Submit</button></a></center><br>-->
            <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 ">Return To Admin Screen</button></a></center>
        </div>
    </section>

{{--  create new model ends --}}

    {{--  bootstrap js files  --}}
  <script type="text/javascript" src="{{ URL('../js/bootstrap.bundle.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.bundle.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.esm.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.esm.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.min.js') }}"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
</body>
</html>
@stop