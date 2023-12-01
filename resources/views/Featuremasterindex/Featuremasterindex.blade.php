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
    <link rel="stylesheet" type="text/css" href="{{ url('../css/custom.css') }}" />
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
                <div class="feature my-5">
                    <form action="{{URL::to('/Newmodelfeature/store')}}" method="POST" >
                        {!! csrf_field() !!}
                    @foreach ($users as $user)
                        <div class="card pb-5 my-3" id="card2" style="display:none;">
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
                            
                                <div class="col-3" style="position:relative;bottom:40px;">
                                    <select name="feature_name" id="feature_name">
                                        @foreach ($users as $user)
                                        <option  class="text-center">{{ $user->Feature_Name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div class="col-3" style="position:relative;bottom:40px;" >
                                    <select name="Featurevalues" id="model_name1" >
                                        <option selected>select your field type</option>
                                        <option value="yes" class="text-center">Select Yes</option>
                                        <option value="no" class="text-center">Select No</option>
                                         <option  class="text-center" value="">Enter Value</option>
                                        <option  class="text-center">Not Sure</option>
                                    </select>
                                    <div id="content"></div>
                                    <form action="{{URL::to('/Newmodelfeature/store')}}" method="POST" >
                                        {!! csrf_field() !!}  
                                        <!--{{--  <input type="text" name="value" id="enter_value">  --}}-->
                                        <button class="btn btn-warning mt-2 Feature_add_btn " id="feature_btn" >Add</button>
                                    </form>
                                </div>
                            </div> 
                        </div>
                        @endforeach
                    </form>
                </div>
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
 </script>
 <script>
$('#model_name1').change(function() {
    if (this.value == '') {
      $("#content").append('<input id="test" name="Featurevalues" placeholder="enter value">')
    } else {
      $("#test").remove();
    }
  });
  </script>
</body>
</html>
@stop