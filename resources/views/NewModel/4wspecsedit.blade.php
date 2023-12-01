@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Model</title>
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
{{--  Edit new model starts --}}
    <section class="section_admin new_model">
        <div class="container-fluid ">
                 <!--<form action="{{URL::to('/NewModel/store/')}}" method="POST" enctype="multipart/form-data">-->
                 <!--@if(Session::get('cate'))-->
                 <!--<input type = 'hidden' name='cur_model' id='cur_model'>-->
                 <!--  <h3> {{Session()->get('cate')}}</h3>-->
                 <!--  @endif-->
                <div class="create_new_model">
                    <h2 class="text-center">Edit Model</h2>
                </div>
                <div class="feature my-5">
                    
                    <!--Model Name-->
                    <form action="{{URL::to('/NewModel/update')}}/{{$Newmodels->id}}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="card p-5 my-3" id="card1">
                            <input type="hidden" name="id" id="id" value="{{$Newmodels->id}}" >
                            <div class="row oem_name">
                                <div class="col-3">
                                    <h3 class="text-center">Select OEM Name</h3>
                                </div>
                                <div class="col-3">
                                    <select name="OEM_name" id="oem_name" placeholder="Select OEM Name" value="{{$Newmodels->OEM_name}}" required>
                                        <option class="text-center" value="" > Select OEM Name</option> 
                                     @foreach ($usersc as $userc)
                                        <option  class="text-center" required>{{ $userc->new_oem_name }}</option>
                                    @endforeach
                                    </select>
                                 </div>
                                <div class="col-3">
                                    <h3 class="text-center">Enter Model Name</h3>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="model_name" id="model_name" id="frown" value="{{$Newmodels->OEM_name}}" placeholder="Enter Model Name" required>
                                </div>
                               <div class="col-3">
                                    <input type="text"  hidden="true" name="Status" id="Status" >
                                </div>
                               <form action="{{URL::to('/NewModel/update')}}/{{$Newmodels->id}}" method="POST" enctype="multipart/form-data">
                                    {!! csrf_field() !!}  
                                    <center><button class="btn btn-warning my-3" id="frow" onclick="add()" style="width:30%;">Update</button></center>
                                </form>
                            </div>
                        </div>
                    </form>
                    <!--Fewture Master-->
                    <div class="" style="dispaly:none;">
                       <form action="{{URL::to('/Fourwheelerspecsfeature/update')}}/{{$Fourwheelerspecsfeature->id}}" method="POST" enctype="multipart/form-data">
                           {!! csrf_field() !!}
                            <div class="card pb-3 px-2 my-3" id="card2">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature1"> Vehicle Type</h5>
                                    </div>
                                    <div class="col-4">
                                        <select name="Vehicle_Type" id="Vehicle_Type" >
                                            <option></option>
                                            <option value="Car" class="text-center">Car</option>
                                            <option value="Suv" class="text-center">Suv</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card3">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature2"> OEM Brand Master</h5>
                                    </div>
                                    <div class="col-4">
                                        <select name="OEM_Brand_Name" id="OEM_Brand_Name" required>
                                            <option class="text-center" value="" > Select OEM Brand Name</option>
                                            @foreach ($usersc as $userc)
                                                <option  class="text-center" required>{{ $userc->new_oem_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card4">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature3">Model  Description</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="Model_Description" id="Model_Description" maxlength="75" placeholder="Enter Description" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card140">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature139"> Version Name</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="Version_name" id="Version_name" maxlength="75" placeholder="Enter version Name" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card5">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature4"> Special or Limited Edition</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Special_limited_edition" id="Special_limited_edition" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                            <option value="No" class="text-center">No</option>
                                             <option value="Not Sure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card6">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature5"> Fuel</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Fuel" id="Fuel" >
                                            <option></option>
                                            <option value="Electric" class="text-center">Electric</option>
                                            <option value="Hybrid" class="text-center">Hybrid</option>
                                             <option value="Hydrogen" class="text-center">Hydrogen</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card7">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature6"> Product Launch Date</h5>
                                    </div>
                                    <div class="col-4">
                                        <select name="Product_Launch_Date" id="Product_Launch_Date" placeholder="Enter DD" >
                                            <option></option>
                                            <option value="1" class="text-center">1</option>
                                            <option value="2" class="text-center">2</option>
                                            <option value="3" class="text-center">3</option>
                                            <option value="4" class="text-center">4</option>
                                            <option value="5" class="text-center">5</option>
                                            <option value="6" class="text-center">6</option>
                                            <option value="7" class="text-center">7</option>
                                            <option value="8" class="text-center">8</option>
                                            <option value="9" class="text-center">9</option>
                                            <option value="10" class="text-center">10</option>
                                            <option value="11" class="text-center">11</option>
                                            <option value="12" class="text-center">12</option>
                                            <option value="13" class="text-center">13</option>
                                            <option value="14" class="text-center">14</option>
                                            <option value="15" class="text-center">15</option>
                                            <option value="16" class="text-center">16</option>
                                            <option value="17" class="text-center">17</option>
                                            <option value="18" class="text-center">18</option>
                                            <option value="19" class="text-center">19</option>
                                            <option value="20" class="text-center">20</option>
                                            <option value="21" class="text-center">21</option>
                                            <option value="22" class="text-center">22</option>
                                            <option value="23" class="text-center">23</option>
                                            <option value="24" class="text-center">24</option>
                                            <option value="25" class="text-center">25</option>
                                            <option value="26" class="text-center">26</option>
                                            <option value="27" class="text-center">27</option>
                                            <option value="27" class="text-center">28</option>
                                            <option value="29" class="text-center">29</option>
                                            <option value="30" class="text-center">30</option>
                                            <option value="31" class="text-center">31</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card8">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature7"> Product Launch Month</h5>
                                    </div>
                                    <div class="col-4">
                                         <input type="month" name="Product_Launch_Month" id="Product_Launch_Month" placeholder="Enter MM">
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card9">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature8"> Product Launch Year</h5>
                                    </div>
                                    <div class="col-4">
                                         <input type="year" name="Product_Launch_Year" id="Product_Launch_Year" placeholder="Enter YYYY">
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card10">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature9"> Model Year</h5>
                                    </div>
                                    <div class="col-4">
                                         <input type="year" name="Model_Year" id="Model_Year" placeholder="Enter YYYY">
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card11">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature10">Year Of Manufacturing</h5>
                                    </div>
                                    <div class="col-4">
                                         <input type="year" name="Year_of_Manufacturing" id="Year_of_Manufacturing" placeholder="Enter YYYY">
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card12">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature11"> Country</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Country" id="Country">
                                             <option></option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antartica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo">Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                            <option value="Croatia">Croatia (Hrvatska)</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="France Metropolitan">France, Metropolitan</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                            <option value="Holy See">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran (Islamic Republic of)</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                            <option value="Korea">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon" >Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia, Federated States of</option>
                                            <option value="Moldova">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                            <option value="Saint LUCIA">Saint LUCIA</option>
                                            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                            <option value="Span">Spain</option>
                                            <option value="SriLanka">Sri Lanka</option>
                                            <option value="St. Helena">St. Helena</option>
                                            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Viet Nam</option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                             <option></option>
                                            </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card13">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature12">Trim Level</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="Trim_Level" id="Trim_Level" maxlength="20" placeholder="Enter Trim Level" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card14">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature13">Price Ex Showroom</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Price_Ex_Showroom" id="Price_Ex_Showroom" placeholder="Enter INR" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==20) return false;" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card15">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature14">Motor Description</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="Motor_Description" id="Motor_Description" maxlength="30" placeholder="Enter Motor Description" >
                                    </div>
                                </div> 
                            </div>
                             <div class="card pb-3 px-2 my-3" id="card16">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature15">Electric motor power </h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="Number" name="Electric_motor_power" id="Electric_motor_power" placeholder="Enter PS" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card17">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature16">Electric motor torque </h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="Number" name="Electric_motor_torque" id="Electric_motor_torque" placeholder="Enter Nm" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card18">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature17">Drive modes Number </h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="Number" name="Drive_modes_Number" id="Drive_modes_Number" placeholder="Enter Number Of" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card19">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature18">Drive Mode Description</h5>
                                    </div>
                                    <div class="col-4">
                                          <input type="checkbox" id="Drive_modes_Description" name="Drive_modes_Description[]" value="Drive">
                                          <label for="vehicle1"> Drive</label><br>
                                          <input type="checkbox" id="Drive_modes_Description" name="Drive_modes_Description[]" value="sports">
                                          <label for="vehicle2"> Sports</label><br>
                                          <input type="checkbox" id="Drive_modes_Description" name="Drive_modes_Description[]" value="City">
                                          <label for="vehicle3"> City</label><br>
                                          <input type="checkbox" id="Drive_modes_Description" name="Drive_modes_Description[]" value="Eco">
                                          <label for="vehicle3"> Eco</label><br>
                                          <input type="checkbox" id="Drive_modes_Description" name="Drive_modes_Description[]" value="OffRoad">
                                          <label for="vehicle3"> OffRoad</label>
                                    </div>
                                </div> 
                            </div>
                             <div class="card pb-3 px-2 my-3" id="card20">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature19">Battery Pack</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="Number" name="Battery_pack" id="Battery_pack" placeholder="Enter Battery Pack" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;"  >
                                    </div>
                                </div> 
                            </div>
                             <div class="card pb-3 px-2 my-3" id="card21">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature20">Range Certified Full Charge Range Kms </h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="Number" name="Range_Certified_Full_Charge_Range_Kms" id="Range_Certified_Full_Charge_Range_Kms" placeholder="Enter Kilometers" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;"  >
                                    </div>
                                </div> 
                            </div>
                             <div class="card pb-3 px-2 my-3" id="card22">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature21">Thermal management system </h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="Thermal_management_system" id="Thermal_management_system" maxlength="25" placeholder="Enter Text" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card23">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature22">Ingress protection for motor and battery pack </h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="Ingress_protection_for_motor_and_battery_pack" id="Ingress_protection_for_motor_and_battery_pack" maxlength="5" placeholder="Enter KWH" >
                                    </div>
                                </div> 
                            </div>
                             <div class="card pb-3 px-2 my-3" id="card24">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature23">Acceleration 0-40kmh</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Acceleration_Zero_to_Hundrad_kmph" id="Acceleration_Zero_to_Hundrad_kmph" placeholder="Enter Seconds" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card25">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature24">Gradeability </h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Gradeability" id="Gradeability" placeholder="Enter %" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card26">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature25">Emission </h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Emission" id="Emission" placeholder="Enter Number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card27">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature26">Smart Drive Features Smart Regenerative Braking </h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="Smart_Drive_Features_Smart_Regenerative_Braking" id="Smart_Drive_Features_Smart_Regenerative_Braking" maxlength="2" placeholder="Enter Text" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card28">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature27">Smart Drive Features Smart Regenerative Braking No of Levels</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Smart_Drive_Features_Smart_Regenerative_Braking_No_of_Levels" id="Smart_Drive_Features_Smart_Regenerative_Braking_No_of_Levels" placeholder="Enter Number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;"  >
                                    </div>
                                </div> 
                            </div>
                             <div class="card pb-3 px-2 my-3" id="card29">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature28"> Transmission</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Transmission_Transmission" id="Transmission_Transmission" >
                                              <option></option>
                                            <option value="Electric" class="text-center">Manual</option>
                                            <option value="Hybrid" class="text-center">Automatic</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                             <div class="card pb-3 px-2 my-3" id="card30">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature29">Dimensions & Weight Length</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Dimensions_and_Weight_Length" id="Dimensions_and_Weight_Length" placeholder="Enter mm" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card31">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature30">Dimensions & Weight Width</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Dimensions_and_Weight_Width" id="Dimensions_and_Weight_Width" placeholder="Enter mm" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card139">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature139">Dimensions & Weight Height</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Dimensions_and_Weight_Height" id="Dimensions_and_Weight_Height" placeholder="Enter mm" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card32">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature31">Dimensions & Wheel Base</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Dimensions_and_Weight_wheel_Base" id="Dimensions_and_Weight_wheel_Base" placeholder="Enter mm" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card33">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature32">Dimensions & Ground Clearance</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Dimensions_and_Weight_Ground_clearance_unladen" id="Dimensions_and_Weight_Ground_clearance_unladen" placeholder="Enter mm" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card34">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature33">Dimensions & Weight Boot Space</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Dimensions_and_Weight_Boot_space" id="Dimensions_and_Weight_Boot_space" placeholder="Enter Litre" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card35">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature34">Dimensions & Weight Kerb Weight</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Dimensions_and_Weight_Kerb_weight" id="Dimensions_and_Weight_Kerb_weight" placeholder="Enter Kg" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card36">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature35">Turning circle radius </h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Turning_circle_radius" id="Turning_circle_radius" placeholder="Enter Meters" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card37">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature36"> Brakes Front</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Brakes_Front" id="Brakes_Front" >
                                              <option></option>
                                            <option value="disc" class="text-center">Disc</option>
                                             <option value="drum" class="text-center">Drum</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card38">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature37"> Brakes Rear</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Brakes_Rear" id="Brakes_Rear" >
                                              <option></option>
                                            <option value="disc" class="text-center">Disc</option>
                                             <option value="drum" class="text-center">Drum</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                              <div class="card pb-3 px-2 my-3" id="card39">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature38">Wheel Size</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Wheel_Size" id="Wheel_Size" placeholder="Enter Inch"  onKeyPress="if(this.value.length==3) return false;" >
                                    </div>
                                </div> 
                            </div>
                             <div class="card pb-3 px-2 my-3" id="card40">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature39">Charging Charging standard</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="Charging_Charging_standard" id="Charging_Charging_standard" maxlenght="5" placeholder="Enter Text" >
                                    </div>
                                </div> 
                            </div>
                             <!-- <div class="card pb-3 px-2 my-3" id="card41">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature40">Charging Charging standard</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="charging_standard" id="charaging_standard" maxlenght="5" placeholder="Enter Charging Charging standard" >
                                    </div>
                                </div> 
                            </div> -->
                            <div class="card pb-3 px-2 my-3" id="card42">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature41">Charging Estimated regular charging time from 15A plug point</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Chargng_Estimted_reglr_chargng_tim_from_fiftenA_plg_pt" id="Chargng_Estimted_reglr_chargng_tim_from_fiftenA_plg_pt" placeholder="Enter Minutes" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card43">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature42">Charging Estimated charging time mins 7.2 KW AC fast Charger</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Chargng_Estimted_chargng_tim_min_Sven_KWAC_fast_Charger" id="Chargng_Estimted_chargng_tim_min_Sven_KWAC_fast_Charger" placeholder="Enter Minutes" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;"  >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card44">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature43">Charging Estimated fast charging time mins 50 KW DC Fast Charger</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" name="Charing_Estimted_fast_chaging_tim_min_fifty_KWDC_Fst_Charger" id="Charing_Estimted_fast_chaging_tim_min_fifty_KWDC_Fst_Charger" placeholder="Enter Minutes" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;"  >
                                    </div>
                                </div> 
                            </div>
                             <div class="card pb-3 px-2 my-3" id="card45">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature44">Warranty Battery pack & motor warranty</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="Warranty_Battery_pack_and_motor_warranty" id="Warranty_Battery_pack_and_motor_warranty" maxlength="10" placeholder="Enter Years / Kms Earlier" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card46">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature45">Warranty Vehicle warranty</h5>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" name="Warranty_Vehicle_warranty" id="Warranty_Vehicle_warranty" maxlength="10" placeholder="Enter Years / Kms Earlier" >
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card47">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature46"> Exterior Projector headlamps</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Exterior_Projector_headlamps" id="Exterior_Projector_headlamps" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card48">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature47">Exterior DRL</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Exterior_DRL" id="Exterior_DRL" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card49">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature48">Exterior LED Tail Lamps</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Exterior_LED_Tail_Lamps" id="Exterior_LED_Tail_Lamps" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card50">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature49">Exterior Floating roof</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Exterior_Floating_roof" id="Exterior_Floating_roof" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card51">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature50">Exterior ORVMs with turn indicators</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Exterior_ORVMs_with_turn_indicators" id="Exterior_ORVMs_with_turn_indicators" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card52">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature51">Exterior Roof rails</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Exterior_Roof_rails" id="Exterior_Roof_rails" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card53">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature52">Exterior Door side body cladding </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Exterior_Door_side_body_cladding" id="Exterior_Door_side_body_cladding" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card54">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature53">Exterior Shark fin antenna</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Exterior_Shark_fin_antenna" id="Exterior_Shark_fin_antenna" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card55">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature54">Exterior Alloy wheels</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Exterior_Alloy_wheels" id="Exterior_Alloy_wheels" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card56">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature55">Exterior Body coloured door handles</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Exterior_Body_coloured_door_handles" id="Exterior_Body_coloured_door_handles" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card57">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature56">Comfort & Convenience Electric sunroof </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Electric_sunroof" id="Comfort_and_Convenience_Electric_sunroof" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card58">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature57">Comfort & Convenience Auto headlamps</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Auto_headlamps" id="Comfort_and_Convenience_Auto_headlamps" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card59">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature58">Comfort & Convenience Rain sensing wipers</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Rain_sensing_wipers" id="Comfort_and_Convenience_Rain_sensing_wipers" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card60">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature59">Comfort & Convenience Fully automatic temperature control</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Fully_automatic_temp_cntrl" id="Comfort_and_Convenience_Fully_automatic_temp_cntrl" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card61">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature60">Comfort and Convenience Rear AC vents</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Rear_AC_vents" id="Comfort_and_Convenience_Rear_AC_vents" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card62">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature61">Comfort & Convenience Height adjustable driver seat</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Height_adjustable_dvr_seat" id="Comfort_and_Convenience_Height_adjustable_dvr_seat" >
                                              <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card63">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature62">Comfort and Convenience Height adjustable front seatbelts</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Height_adjustable_front_seatbelts" id="Comfort_and_Convenience_Height_adjustable_front_seatbelts" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card64">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature63">Comfort & Convenience Adjustable rear seat head rest</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Adjustable_rear_seat_head_rest" id="Comfort_and_Convenience_Adjustable_rear_seat_head_rest" >
                                            <option></option> 
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card65">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature64">Comfort & Convenience Remote central lock</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Remote_central_lock" id="Comfort_and_Convenience_Remote_central_lock" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card66">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature65">Comfort & Convenience Smart key with push-button start (PEPS)</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Smart_key_with_pushbutton_start_PEPS" id="Comfort_and_Convenience_Smart_key_with_pushbutton_start_PEPS" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card67">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature66">Comfort & Convenience Cruise Control</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Cruise_Control" id="Comfort_and_Convenience_Cruise_Control" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card68">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature67">Comfort & Convenience Power windows (all 4)</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Power_windows_all_four" id="Comfort_and_Convenience_Power_windows_all_four" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card69">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature68">Comfort & Convenience Electrically operated ORVM</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Electrically_operated_ORVM" id="Comfort_and_Convenience_Electrically_operated_ORVM" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card70">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature69">Comfort & Convenience Fast USB charging port at front</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Fast_USB_charging_port_at_front" id="Comfort_and_Convenience_Fast_USB_charging_port_at_front" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card71">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature70">Comfort & Convenience 12V front power outlet</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_twelveV_front_power_outlet" id="Comfort_and_Convenience_twelveV_front_power_outlet" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card72">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature71">Comfort & Convenience 12V rear power outlet</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_twelveV_rear_power_outlet" id="Comfort_and_Convenience_twelveV_rear_power_outlet" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card73">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature72">Comfort & Convenience Electrically Operated Tailgate</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Electrically_Operated_Tailgate" id="Comfort_and_Convenience_Electrically_Operated_Tailgate" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card74">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature73">Comfort & Convenience Rear wiper and wash system</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Rear_wiper_and_wash_system" id="Comfort_and_Convenience_Rear_wiper_and_wash_system" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card75">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature74">Comfort & Convenience Boot lamp</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Boot_lamp" id="Comfort_and_Convenience_Boot_lamp" >
                                             <option></option> 
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card76">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature75">Comfort & Convenience Ventilated seats </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Ventilated_seats" id="Comfort_and_Convenience_Ventilated_seats" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card77">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature76">Comfort & Convenience Auto Dimming IRVM </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Auto_Dimming_IRVM" id="Comfort_and_Convenience_Auto_Dimming_IRVM" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card78">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature77">Comfort & Convenience Wireless Smartphone Charger</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Wireless_Smartphone_Charger" id="Comfort_and_Convenience_Wireless_Smartphone_Charger" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card79">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature78">Comfort & Convenience Air Purifier with AQI Display </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Comfort_and_Convenience_Air_Purfir_with_AQI_Display" id="Comfort_and_Convenience_Air_Purfir_with_AQI_Display" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card80">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature79">Interior Two Tone Interiors</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Interior_Two_Tone_Interiors" id="Interior_Two_Tone_Interiors" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card81">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature80">Interior Leatherette wrapped steering wheel</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Interior_Leatherette_wrapped_steering_wheel" id="Interior_Leatherette_wrapped_steering_wheel" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card82">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature81">Interior Door trim insert</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Interior_Door_trim_insert" id="Interior_Door_trim_insert" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card83">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature82">Interior Bottle holder in all doors</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Interior_Bottle_holder_in_all_doors" id="Interior_Bottle_holder_in_all_doors" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card84">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature83">Interior Umbrella holder in front doors</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Interior_Umbrella_holder_in_front_doors" id="Interior_Umbrella_holder_in_front_doors" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card85">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature84">Interior Rear seat central armrest</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Interior_Rear_seat_central_armrest" id="Interior_Rear_seat_central_armrest" >
                                                        $table->string('Products');
            $table->string('Model_Name');
            $table->string('Vehicle_Type')->nullable();
            $table->string('OEM_Brand_Name')->nullable();
            $table->string('Model_Description')->nullable();
            $table->string('Special_limited_edition')->nullable();
            $table->string('Fuel')->nullable();
            $table->string('Product_Launch_Date')->nullable();
            $table->string('Product_Launch_Month')->nullable();
            $table->string('Product_Launch_Year')->nullable();
            $table->string('Model_Year')->nullable();
            $table->string('Year_of_Manufacturing')->nullable();
            $table->string('Country')->nullable();
            $table->string('Trim_Level')->nullable();
            $table->float('Price_Ex_Showroom')->nullable();
            $table->decimal('Motor_Description',5,2)->nullable();
            $table->decimal('Electric_motor_power',5,2)->nullable();
            $table->decimal('Electric_motor_torque',5,2)->nullable();
            $table->decimal('Drive_modes_Number')->nullable();
            $table->string('Drive_modes_Description')->nullable();
            $table->decimal('Battery_pack')->nullable();
            $table->decimal('Range_Certified_Full_Charge_Range_Kms',5,2)->nullable();
            $table->string('Thermal_management_system')->nullable();
            $table->string('Ingress_protection_for_motor_and_battery_pack')->nullable();
            $table->float('Acceleration_Zero_to_Hundrad_kmph')->nullable();
            $table->float('Gradeability')->nullable();
            $table->float('Emission')->nullable();
            $table->string('Smart_Drive_Features_Smart_Regenerative_Braking')->nullable();
            $table->float('Smart_Drive_Features_Smart_Regenerative_Braking_No_of_Levels')->nullable();
            $table->string('Transmission_Transmission')->nullable();
            $table->float('Dimensions_and_Weight_Length')->nullable();
            $table->float('Dimensions_and_Weight_Width')->nullable();
            $table->float('Dimensions_and_Weight_Height')->nullable();
            $table->float('Dimensions_and_Weight_wheel_Base')->nullable();
            $table->float('Dimensions_and_Weight_Ground_clearance_unladen')->nullable();
            $table->float('Dimensions_and_Weight_Boot_space')->nullable();
            $table->float('Dimensions_and_Weight_Kerb_weight')->nullable();
            $table->float('Turning_circle_radius')->nullable();
            $table->string('Brakes_Front')->nullable();
            $table->string('Brakes_Rear')->nullable();
            $table->decimal('Wheel_Size',5,2)->nullable();
            $table->decimal('Charging_Charging_standard')->nullable();
            $table->string('Chargng_Estimted_reglr_chargng_tim_from_fiftenA_plg_pt',5,2)->nullable();
            $table->string('Chargng_Estimted_chargng_tim_min_Sven_KWAC_fast_Charger',5,2)->nullable();
            $table->string('Charing_Estimted_fast_chaging_tim_min_fifty_KWDC_Fst_Charger',5,2)->nullable();
            $table->string('Warranty_Battery_pack_and_motor_warranty')->nullable();
            $table->string('Warranty_Vehicle_warranty')->nullable();
            $table->string('Exterior_Projector_headlamps')->nullable();
            $table->string('Exterior_DRL')->nullable();
            $table->string('Exterior_LED_Tail_Lamps')->nullable();
            $table->string('Exterior_Floating_roof')->nullable();
            $table->string('Exterior_ORVMs_with_turn_indicators')->nullable();
            $table->string('Exterior_Roof_rails')->nullable();
            $table->string('Exterior_Door_side_body_cladding')->nullable();
            $table->string('Exterior_Shark_fin_antenna')->nullable();
            $table->string('Exterior_Alloy_wheels')->nullable();
            $table->string('Exterior_Body_coloured_door_handles')->nullable();
            $table->string('Comfort_and_Convenience_Electric_sunroof')->nullable();
            $table->string('Comfort_and_Convenience_Auto_headlamps')->nullable();
            $table->string('Comfort_and_Convenience_Rain_sensing_wipers')->nullable();
            $table->string('Comfort_and_Convenience_Fully_automatic_temp_cntrl')->nullable();
            $table->text('Comfort_and_Convenience_Rear_AC_vents')->nullable();
            $table->text('Comfort_and_Convenience_Height_adjustable_dvr_seat')->nullable();
            $table->text('Comfort_and_Convenience_Height_adjustable_front_seatbelts')->nullable();
            $table->text('Comfort_and_Convenience_Adjustable_rear_seat_head_rest')->nullable();
            $table->text('Comfort_and_Convenience_Remote_central_lock')->nullable();
            $table->text('Comfort_and_Convenience_Smart_key_with_pushbutton_start_PEPS')->nullable();
            $table->text('Comfort_and_Convenience_Cruise_Control')->nullable();
            $table->text('Comfort_and_Convenience_Power_windows_all_four')->nullable();
            $table->text('Comfort_and_Convenience_Electrically_operated_ORVM')->nullable();
            $table->text('Comfort_and_Convenience_Fast_USB_charging_port_at_front')->nullable();
            $table->text('Comfort_and_Convenience_twelveV_front_power_outlet')->nullable();
            $table->text('Comfort_and_Convenience_twelveV_rear_power_outlet')->nullable();
            $table->text('Comfort_and_Convenience_Electrically_Operated_Tailgate')->nullable();
            $table->text('Comfort_and_Convenience_Rear_wiper_and_wash_system')->nullable();
            $table->text('Comfort_and_Convenience_Boot_lamp')->nullable();
            $table->text('Comfort_and_Convenience_Ventilated_seats')->nullable();
            $table->text('Comfort_and_Convenience_Auto_Dimming_IRVM')->nullable();
            $table->text('Comfort_and_Convenience_Wireless_Smartphone_Charger')->nullable();
            $table->text('Comfort_and_Convenience_Air_Purfir_with_AQI_Display')->nullable();
            $table->text('Interior_Two_Tone_Interiors')->nullable();
            $table->text('Interior_Leatherette_wrapped_steering_wheel')->nullable();
            $table->text('Interior_Door_trim_insert')->nullable();
            $table->text('Interior_Bottle_holder_in_all_doors')->nullable();
            $table->text('Interior_Umbrella_holder_in_front_doors')->nullable();
            $table->text('Interior_Rear_seat_central_armrest')->nullable();
            $table->text('Interior_Cooled_and_illuminated_glove_box')->nullable();
            $table->text('Interior_Rear_seat_cushion_hndrd_per_flip_and_flat_fold')->nullable();
            $table->text('Interior_Seat_upholstery')->nullable();
            $table->text('Car_Infotainment_Infotainment_System_Brand')->nullable();
            $table->text('Car_Infotainment_touchscreen_infotainment')->nullable();
            $table->text('Car_Infotainment_No_of_Speakers')->nullable();
            $table->text('Car_Infotainment_Bluetooth_connectivity')->nullable();
            $table->text('Car_Infotainment_SMS_WhatsApp_notifications_and_read_outs')->nullable();
            $table->text('Car_Infotainment_Apple_Car_Play_and_Android_Auto')->nullable();
            $table->text('Car_Infotainment_Image_and_video_playback')->nullable();
            $table->text('Car_Infotainment_Sterng_Mounted_Audio_Ph_and_Voic_Cntls')->nullable();
            $table->text('Car_Infotainment_What_three_Words_address_based_navigation')->nullable();
            $table->text('Instrumet_Panel_Dgtl_instrumnt_clustr_with_ful_grphic_disply')->nullable();
            $table->text('Instrument_Panel_Voic_alerts_door_open_seatbelt_remind_and_mor')->nullable();
            $table->text('Safety_and_Security_ESP')->nullable();
            $table->text('Safety_and_Security_Traction_Control')->nullable();
            $table->text('Safety_and_Security_Hydraulic_brake_fading_compensation')->nullable();
            $table->text('Safety_and_Security_After_impact_braking')->nullable();
            $table->text('Safety_and_Security_Panic_brake_alert')->nullable();
            $table->text('Safety_and_Security_Rollover_mitigation')->nullable();
            $table->text('Safety_and_Security_Brake_disc_wiping')->nullable();
            $table->text('Safety_and_Security_Electronic_parking_brake')->nullable();
            $table->text('Safety_and_Security_Auto_vehicle_hold')->nullable();
            $table->text('Safety_and_Security_Hill_Ascent_Assist')->nullable();
            $table->text('Safety_and_Security_Hill_Descent_Assist')->nullable();
            $table->text('Safety_and_Security_Puncture_Repair_Kit')->nullable();
            $table->text('Safety_and_Security_iTPMS')->nullable();
            $table->text('Safety_and_Security_Driver_and_codriver_airbags')->nullable();
            $table->text('Safety_and_Security_ABS_with_EBD_and_CSC')->nullable();
            $table->text('Safety_and_Security_Driver_seatbelt_with_pretensioners')->nullable();
            $table->text('Safety_and_Security_Child_safety_rear_door_locks')->nullable();
            $table->text('Safety_and_Security_Follow_me_home_headlamps')->nullable();
            $table->text('Safety_and_Security_Front_fog_lamps')->nullable();
            $table->text('Safety_and_Security_Rear_defogger')->nullable();
            $table->text('Safety_and_Security_Auto_defogger')->nullable();
            $table->text('Safety_and_Security_Camera_based_reverse_park_assist')->nullable();
            $table->text('App_Intrusion_Alert')->nullable();
            $table->text('App_Stolen_Vehicle_Tracking')->nullable();
            $table->text('App_Panic_Notification')->nullable();
            $table->text('App_Remote_Immobilization')->nullable();
            $table->text('App_FindMyCar')->nullable();
            $table->text('App_Find_Nearest_Charging_Service_station')->nullable();
            $table->text('App_Geo_Fencing')->nullable();
            $table->text('App_Time_Fencing')->nullable();
            $table->text('App_Remote_Door_Lock_Unlock')->nullable();
            $table->text('App_Remote_cooling')->nullable();
            $table->text('App_Remote_Vehicle_Diagnostics')->nullable();
            $table->text('App_Remote_Lights_On_Off')->nullable();
            $table->text('App_Vehicle_Health_Alerts')->nullable();
            $table->text('App_Trip_Analytics_and_Driver_Behaviour')->nullable();
            $table->text('App_Social_Tribes')->nullable();
            $table->text('App_Smart_Watch_Integration')->nullable();
            $table->string('Modelimage')->nullable();
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card86">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature85">Interior Cooled and illuminated glove box</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Interior_Cooled_and_illuminated_glove_box" id="Interior_Cooled_and_illuminated_glove_box" >
                                                <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card87">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature86">Interior Rear seat cushion 100% flip and flat fold</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Interior_Rear_seat_cushion_hndrd_per_flip_and_flat_fold" id="Interior_Rear_seat_cushion_hndrd_per_flip_and_flat_fold" >
                                               <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card88">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature87">Interior Seat upholstery</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Interior_Seat_upholstery" id="Interior_Seat_upholstery" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card89">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature88">Car Infotainment Infotainment System Brand</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Car_Infotainment_Infotainment_System_Brand" id="Car_Infotainment_Infotainment_System_Brand" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card140">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature140">Car Infotainment Touchscreen Infotainment</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Car_Infotainment_touchscreen_infotainment" id="Car_Infotainment_touchscreen_infotainment" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card90">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature89">Car Infotainment No of Speakers</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Car_Infotainment_No_of_Speakers" id="Car_Infotainment_No_of_Speakers" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            
                            <!-- <div class="card pb-3 px-2 my-3" id="card91">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature90">Car Infotainment No of Speakers</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="speakers" id="speakers" >
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div> -->
                            <div class="card pb-3 px-2 my-3" id="card92">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature91">Car Infotainment Bluetooth connectivity</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Car_Infotainment_Bluetooth_connectivity" id="Car_Infotainment_Bluetooth_connectivity" >
                                           <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card93">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature92">Car Infotainment SMS / WhatsApp notifications & read-outs</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Car_Infotainment_SMS_WhatsApp_notifications_and_read_outs" id="Car_Infotainment_SMS_WhatsApp_notifications_and_read_outs" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card94">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature93">Car Infotainment Apple Car Play & Android Auto</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Car_Infotainment_Apple_Car_Play_and_Android_Auto" id="Car_Infotainment_Apple_Car_Play_and_Android_Auto" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card95">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature94">Car Infotainment Image & video playback</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Car_Infotainment_Image_and_video_playback" id="Car_Infotainment_Image_and_video_playback" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card96">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature95">Car Infotainment Steering Mounted Audio, Phone & Voice Controls</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Car_Infotainment_Sterng_Mounted_Audio_Ph_and_Voic_Cntls" id="Car_Infotainment_Sterng_Mounted_Audio_Ph_and_Voic_Cntls" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card97">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature96">Car Infotainment What3Words™ address based navigation</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Car_Infotainment_What_three_Words_address_based_navigation" id="Car_Infotainment_What_three_Words_address_based_navigation" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card98">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature97">Instrument Panel Digital instrument cluster with full graphic display</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Instrumet_Panel_Dgtl_instrumnt_clustr_with_ful_grphic_disply" id="Instrumet_Panel_Dgtl_instrumnt_clustr_with_ful_grphic_disply" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card99">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature98">Instrument Panel Voice alerts - door open, seatbelt reminder &  more</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Instrument_Panel_Voic_alerts_door_open_seatbelt_remind_and_mor" id="Instrument_Panel_Voic_alerts_door_open_seatbelt_remind_and_mor" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card100">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature99">Safety & Security ESP</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_ESP" id="Safety_and_Security_ESP" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card101">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature100">Safety & Security Traction Control</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Traction_Control" id="Safety_and_Security_Traction_Control" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card102">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature101">Safety & Security Hydraulic brake fading compensation</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Hydraulic_brake_fading_compensation" id="Safety_and_Security_Hydraulic_brake_fading_compensation" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card103">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature102">Safety & Security After-impact braking</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_After_impact_braking" id="Safety_and_Security_After_impact_braking" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card104">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature103">Safety & Security Panic brake alert</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Panic_brake_alert" id="Safety_and_Security_Panic_brake_alert" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card105">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature104">Safety & Security Roll-over mitigation</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Rollover_mitigation" id="Safety_and_Security_Rollover_mitigation" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card106">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature105">Safety & Security Brake disc wiping</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Brake_disc_wiping" id="Safety_and_Security_Brake_disc_wiping" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card107">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature106">Safety & Security Electronic parking brake</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Electronic_parking_brake" id="Safety_and_Security_Electronic_parking_brake" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card108">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature107">Safety & Security Auto vehicle hold</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Auto_vehicle_hold" id="Safety_and_Security_Auto_vehicle_hold" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card109">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature108">Safety & Security Hill Ascent Assist</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Hill_Ascent_Assist" id="Safety_and_Security_Hill_Ascent_Assist" >
                                           <option></option>  
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card110">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature109">Safety & Security Hill Descent Assist</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Hill_Descent_Assist" id="Safety_and_Security_Hill_Descent_Assist" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card111">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature110">Safety & Security Puncture Repair Kit</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Puncture_Repair_Kit" id="Safety_and_Security_Puncture_Repair_Kit" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card112">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature111">Safety & Security iTPMS</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_iTPMS" id="Safety_and_Security_iTPMS" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card113">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature112">Safety & Security Driver & co-driver airbags</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Driver_and_codriver_airbags" id="Safety_and_Security_Driver_and_codriver_airbags" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card114">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature113">Safety & Security ABS with EBD & CSC</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_ABS_with_EBD_and_CSC" id="Safety_and_Security_ABS_with_EBD_and_CSC" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card115">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature114">Safety & Security Driver seatbelt with pretensioners,</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Driver_seatbelt_with_pretensioners" id="Safety_and_Security_Driver_seatbelt_with_pretensioners" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card116">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature115">Safety & Security Child-safety rear door locks</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Child_safety_rear_door_locks" id="Safety_and_Security_Child_safety_rear_door_locks" >
                                            <option></option> 
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card117">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature116">Safety & Security Follow-me-home headlamps</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Follow_me_home_headlamps" id="Safety_and_Security_Follow_me_home_headlamps" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card118">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature117">Safety & Security Front fog lamps</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Front_fog_lamps" id="Safety_and_Security_Front_fog_lamps" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card119">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature118">Safety & Security Rear defogger</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Rear_defogger" id="Safety_and_Security_Rear_defogger" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card120">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature119">Safety & Security Auto defogger</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Auto_defogger" id="Safety_and_Security_Auto_defogger" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card121">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature120">Safety & Security Camera based reverse park assist </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="Safety_and_Security_Camera_based_reverse_park_assist" id="Safety_and_Security_Camera_based_reverse_park_assist" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card122">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature121"> App Intrusion Alert </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Intrusion_Alert" id="App_Intrusion_Alert" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card123">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature122">  App Stolen Vehicle Tracking  </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Stolen_Vehicle_Tracking" id="App_Stolen_Vehicle_Tracking" >
                                            <option></option> 
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card124">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature123"> App Panic Notification</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Panic_Notification" id="App_Panic_Notification" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card125">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature124"> App Remote Immobilization</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Remote_Immobilization" id="App_Remote_Immobilization" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card126">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature125"> App FindMyCar</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_FindMyCar" id="App_FindMyCar" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card127">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature126"> App Find Nearest Charging/Service station</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Find_Nearest_Charging_Service_station" id="App_Find_Nearest_Charging_Service_station" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                             <div class="card pb-3 px-2 my-3" id="card128">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature127"> App Geo Fencing</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Geo_Fencing" id="App_Geo_Fencing" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card129">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature128"> App Time Fencing</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Time_Fencing" id="App_Time_Fencing" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card130">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature129"> App Remote Door Lock/Unlock</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Remote_Door_Lock_Unlock" id="App_Remote_Door_Lock_Unlock" >
                                            <option></option> 
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card131">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature130">  App Remote cooling </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Remote_cooling" id="App_Remote_cooling" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card132">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature131"> App Remote Vehicle Diagnostics</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Remote_Vehicle_Diagnostics" id="App_Remote_Vehicle_Diagnostics" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card133">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature132"> App Remote Lights On/Off </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Remote_Lights_On_Off" id="App_Remote_Lights_On_Off" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card134">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature133"> App Vehicle Health Alerts </h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Vehicle_Health_Alerts" id="App_Vehicle_Health_Alerts" >
                                            <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card135">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature134"> App Trip Analytics & Driver Behaviour</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Trip_Analytics_and_Driver_Behaviour" id="App_Trip_Analytics_and_Driver_Behaviour" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card136">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature135"> App Social Tribes</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Social_Tribes" id="App_Social_Tribes" >
                                             <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card pb-3 px-2 my-3" id="card137">
                                <div class="row my-5 ">
                                    <div class="col-4 ">
                                        @if(Session::get('Modeldata'))
                                        <input type = 'hidden' name='cur_model' id='cur_model' onchange='vals()'>
                                        <script> function vals(){
                                        document.getElementById('frow');
                                        }</script>
                                        <lable ><h3> Model Name </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2"> {{Session()->get('Modeldata')}}</h5>
                                         @endif
                                    </div>
                                    <div class="col-4" >
                                        <lable ><h3> Feature </h3> </lable>
                                       <h5 style="background-color:#ebf2ec" class="px-3 py-2" name="feature136"> App Smart Watch Integration</h5>
                                    </div>
                                    <div class="col-4">
                                         <select name="App_Smart_Watch_Integration" id="App_Smart_Watch_Integration" >
                                           <option></option>
                                            <option value="yes" class="text-center">Yes</option>
                                             <option value="no" class="text-center">No</option>
                                             <option value="optional" class="text-center">Optional</option>
                                             <option value="notsure" class="text-center">Not Sure</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="card py-2 my-3" id="card138" style="height:100px;">
                                <div class="row my-5" style="position:relative;bottom:40px;" >
                                    <div class="col-6">
                                            <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="Modelimage" id="Modelimage" value="upload image/data" required>
                                            <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Icon</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center><button type="submit" class="btn btn-success mt-2 mx-5 " id="save_model" style="width:30%;">Update</button></center>
                        </form>
                    </div>
                </div>
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
 }
 </script>

</body>
</html>
@stop