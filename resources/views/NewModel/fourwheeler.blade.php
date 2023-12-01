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


        {{--  font awesome cdn  --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">

</head>
<body class="section_admin">
{{--  create new model starts --}}
    <section class="section_admin new_model">
        <div class="container mb-5">
            <form action="" method="">
                <div class="create_new_model">
                    <h2 class="text-center">Create a New Model</h2>
                    <!--<div class="row my-5">-->
                    <!--    <div class="col-4">-->
                    <!--    </div>-->
                    <!--    <div class="col-2">-->
                    <!--        <input type="radio" id="2wheel" name="Products" value="2wheel" onclick='passv()'>-->
                    <!--        <label for="2wheel">2 Wheeler</label><br>-->
                    <!--    </div>-->
                    <!--    <div class="col-2">-->
                    <!--        <input type="radio" id="3wheelcargo" name="Products" value="3wheelcargo">-->
                    <!--        <label for="3wheelcargo">3 Wheeler Cargo</label><br>-->
                    <!--    </div>-->
                    <!--    <div class="col-4">-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="row my-2">-->
                    <!--    <div class="col-4">-->
                    <!--    </div>-->
                    <!--    <div class="col-2">-->
                    <!--        <input type="radio" id="4wheel" name="Products" value="4wheel">-->
                    <!--        <label for="4wheel">4 Wheeler</label><br>-->
                    <!--    </div>-->
                    <!--    <div class="col-2">-->
                    <!--        <input type="radio" id="3wheelpass" name="Products" value="3wheelpass">-->
                    <!--        <label for="3wheelpass">3 Wheeler Pass</label><br>-->
                    <!--    </div>-->
                    <!--    <div class="col-4">-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <div class="feature my-5">
                    <form action="" method="">
                        <div class="row oem_name">
                            <div class="col-3">
                                <h3 class="text-center">Select OEM Name</h3>
                            </div>
                            <div class="col-3">
                                <select name="OEM_name" id="oem_name">
                                    <option value="volvo" class="text-center">OEM Name1</option>
                                    <option value="saab" class="text-center">OEM Name2</option>
                                    <option value="mercedes" class="text-center">OEM Name3</option>
                                    <option value="audi" class="text-center">OEM Name4</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <h3 class="text-center">Enter Model Name</h3>
                            </div>
                            <div class="col-3">
                                <input type="text" name="model_name" id="model_name">
                            </div>
                            <button class="btn btn-warning mt-2 add_btn ">Add</button>
                        </div>
                    </form>
                    <div class="row my-5 fname">
                        <div class="col-3">
                            <h3 class="text-center">Feature 1</h3>
                        </div>
                        <div class="col-3">
                            <select name="feature_name" id="feature_name">
                                <option value="volvo" class="text-center">Feature Name1</option>
                                <option value="saab" class="text-center">Feature Name2</option>
                                <option value="mercedes" class="text-center">Feature Name3</option>
                                <option value="audi" class="text-center">Feature Name4</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select name="Featurevalues" id="model_name" onchange="showtext()">
                                <option value="ev" class="text-center">Enter Value</option>
                                <option value="yes" class="text-center">Select Yes</option>
                                <option value="no" class="text-center">Select No</option>
                                <option value="ns" class="text-center">Not Sure</option>
                            </select>
                        </div>
                        <div class="col-3">
                             {{--  <input type="text" name="value" id="enter_value">  --}}
                            <button class="btn btn-warning mt-2 Feature_add_btn ">Add</button>
                        </div>
                    </div>
                    <!--<div class="row my-5 fname1">-->
                    <!--    <div class="col-3">-->
                    <!--        <h3 class="text-center">Feature 2</h3>-->
                    <!--    </div>-->
                    <!--    <div class="col-3">-->
                    <!--        <select name="feature_name" id="feature_name">-->
                    <!--            <option value="volvo" class="text-center">Feature Name1</option>-->
                    <!--            <option value="saab" class="text-center">Feature Name2</option>-->
                    <!--            <option value="mercedes" class="text-center">Feature Name3</option>-->
                    <!--            <option value="audi" class="text-center">Feature Name4</option>-->
                    <!--        </select>-->
                    <!--    </div>-->
                    <!--    <div class="col-3">-->
                    <!--        <select name="feature_name" id="model_name" onchange="showtext()">-->
                    <!--            <option value="ev" class="text-center"id="ev">Enter Value</option>-->
                    <!--            <option value="yes" class="text-center">Select Yes</option>-->
                    <!--            <option value="no" class="text-center">Select No</option>-->
                    <!--            <option value="ns" class="text-center">Not Sure</option>-->
                    <!--        </select>-->
                    <!--    </div>-->
                    <!--    <div class="col-3">-->
                    <!--        {{--  <input type="text" name="value" id="enter_value">  --}}-->
                    <!--        <button class="btn btn-warning mt-2 Feature_add_btn ">Add</button>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="row my-5">
                        <div class="col-3">
                        </div>
                        <div class="col-6">
                            <center>
                                <div class="input-group mb-3 upload_img_model">
                                <input type="file" class="form-control" Name="Modelimage" id="inputGroupFile02">
                                <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label></div>
                            </center>
                        </div>
                        <div class="col-3">
                        </div>
                    </div>
                </div>
                <center><a href=""><button class="btn btn-warning my-3 model_submit_btn">Submit</button></a></center><br>
            </form>
            <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
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
</body>
</html>
@stop