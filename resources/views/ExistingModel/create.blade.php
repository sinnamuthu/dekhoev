@extends('layout.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Exisiting Model</title>
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
        <style>
            select,option{
                padding: 15px !important;
            }
        </style>
</head>
<body class="section_admin">
{{--  create new model starts --}}
    <section class="section_admin new_model">
        <div class="container mb-5">
            <form action="" method="">
                <!--<div class="create_new_model">-->
                <!--    <h2 class="text-center">Make Change to an Exisiting Model</h2>-->
                <!--    <div class="row my-5">-->
                <!--        <div class="col-4">-->
                <!--        </div>-->
                <!--        <div class="col-2">-->
                <!--            <input type="radio" id="2wheel" name="vehicle" value="2wheel">-->
                <!--            <label for="2wheel">2 Wheeler</label><br>-->
                <!--        </div>-->
                <!--        <div class="col-2">-->
                <!--            <input type="radio" id="3wheelcargo" name="vehicle" value="3wheelcargo">-->
                <!--            <label for="3wheelcargo">3 Wheeler Cargo</label><br>-->
                <!--        </div>-->
                <!--        <div class="col-4">-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="row my-2">-->
                <!--        <div class="col-4">-->
                <!--        </div>-->
                <!--        <div class="col-2">-->
                <!--            <input type="radio" id="4wheel" name="vehicle" value="4wheel">-->
                <!--            <label for="4wheel">4 Wheeler</label><br>-->
                <!--        </div>-->
                <!--        <div class="col-2">-->
                <!--            <input type="radio" id="3wheelpass" name="vehicle" value="3wheelpass">-->
                <!--            <label for="3wheelpass">3 Wheeler Pass</label><br>-->
                <!--        </div>-->
                <!--        <div class="col-4">-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <h2 class="text-center">Make Change to an Exisiting Model</h2>
                <div class="feature my-5">
                    <div class="row my-5 fname">
                        <div class="col-3">
                        </div>
                        <div class="col-3">
                            <select name="oem_name" id="change_oem_name">
                                <option value="volvo" class="text-center change_oem">Select OEM Name1</option>
                                <option value="saab" class="text-center change_oem">Select OEM Name2</option>
                                <option value="mercedes" class="text-center change_oem">Select OEM Name3</option>
                                <option value="audi" class="text-center change_oem">Select OEM Name4</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select name="feature_name" id="change_model_name">
                                <option value="volvo" class="text-center">Select Model Name1</option>
                                <option value="saab" class="text-center">Select Model Name2</option>
                                <option value="mercedes" class="text-center">Select Model Name3</option>
                                <option value="audi" class="text-center">Select Model Name4</option>
                            </select>
                        </div>
                        <div class="col-3">
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-7">
                            <h4 class="text-center mt-5 mb-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center mt-5 mb-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center mt-5 mb-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark  mt-5 mb-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                        <div class="col-7">
                            <h4 class="text-center  my-3 change_model_question">This is the Feature1 Question</h4>
                        </div>
                        <div class="col-2">
                            <h4 class="text-center my-3 change_model_question">Feature1</h4>
                        </div>
                        <div class="col-1">
                            <h4 class="text-center my-3 change_model_question">UOM</h4>
                        </div>
                        <div class="col-2">
                            <a href=""><button class="btn btn-dark my-3">Edit Feature1</button></a>
                        </div>
                    </div>
                </div>
                <center><a href=""><button class="btn btn-warning my-3 save_change_btn">Save</button></a></center><br>
            </form>
            <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1">Return To Admin Screen</button></a></center>
        </div>
    </section>

{{--  create new model ends --}}

    {{--  bootstrap js files  --}}
  <script type="text/javascript" src="{{ URL('../js/bootstrap.bundle.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.bundle.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.esm.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.esm.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.js') }}"></script>
 <script type="text/javascript" src="{{ URL('../js/bootstrap.min.js') }}"></scri


</body>
</html>

@stop
