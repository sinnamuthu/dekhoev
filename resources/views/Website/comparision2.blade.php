<html>
  <head>
      <!--font awesome icons-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../pubic/css/bootstrap-grid.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-grid.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-grid.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-grid.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-reboot.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-reboot.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-reboot.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-reboot.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-utilities.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-utilities.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-utilities.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/bootstrap-utilities.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/custom1.css') }}" />
    
  </head>
<body>
    <section class="comparision">
        <div class="container">
            <h1 class="text-center p-3">Comparision</h1>
            <div class="comparision_section">
                @foreach($product as $productt)
                @foreach($products as $productts)
                <div class="card main-card" style="width: 100%">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="card m-3 compare-card1">
                                <div class="add_circle">
                                    <img src="" class="img-fluid" alt="product image">
                                </div>
                                <div class="card-body">
                                    <h4 class="text-center">{{$productt->Model_Name}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="card m-3 compare-card1">
                                <div class="add_circle">
                                    <img src="" class="img-fluid" alt="product image">
                                </div>
                                <div class="card-body">
                                    <h4 class="text-center">{{$productts->Model_Name}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                @endforeach
                @endforeach
            </div>
            <div class="basic-information my-5">
                <div class="card basic-card1">
                    <div class="card-body">
                        <input type="hidden" name="id" id="id" value="" >
                        @foreach($product as $productt)
                        @foreach($products as $productts)
                        <table class="basic-table">
                            <thead>
                                <tr class="tr color1">
                                    <th>Basic Information</th>
                                    <th>{{$productt->Model_Name}}</th>
                                    <th>{{$productts->Model_Name}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr">
                                    <td>Brand Name</td>
                                    <td>{{$productt->OEM_Brand_Name}}</td>
                                    <td>{{$productts->OEM_Brand_Name}}</td>
                                </tr>
                                <tr class="tr color1">
                                    <td>Price Ex Showroom</td>
                                    <td>₹{{$productt->Price_Ex_Showroom}}</td>
                                    <td>₹{{$productts->Price_Ex_Showroom}}</td>
                                </tr>
                                <tr class="tr">
                                    <td>Motor Description</td>
                                    <td>{{$productt->Motor_Description}}</td>
                                    <td>{{$productts->Motor_Description}}</td>
                                </tr>
                                <tr class="tr color1">
                                    <td>Electric Motor Power</td>
                                    <td>{{$productt->Electric_motor_power}}</td>
                                    <td>{{$productts->Electric_motor_power}}</td>
                                </tr>
                                <tr class="tr ">
                                     <td>Electric Motor Power</td>
                                    <td>{{$productt->Electric_motor_torque}}</td>
                                    <td>{{$productts->Electric_motor_torque}}</td>
                                </tr>
                                <tr class="tr color1">
                                     <td>Turning Circle Radius (Metres)</td>
                                    <td>{{$productt->Turning_circle_radius}}</td>
                                    <td>{{$productts->Turning_circle_radius}}</td>
                                </tr>
                                <tr class="tr ">
                                    <td>Fuel Type</td>
                                    <td>{{$productt->Fuel}}</td>
                                    <td>{{$productts->Fuel}}</td>
                                </tr>
                                <tr class="tr color1">
                                    <td>Gradeability</td>
                                    <td>{{$productt->Gradeability}}</td>
                                    <td>{{$productts->Gradeability}}</td>
                                </tr>
                                <tr class="tr ">
                                    <td>Front Brake Type</td>
                                    <td>{{$productt->Brakes_Front}}</td>
                                    <td>{{$productts->Brakes_Front}}</td>
                                </tr>
                                <tr class="tr color1">
                                    <td>Rear Brake Type</td>
                                    <td>{{$productt->Brakes_Rear}}</td>
                                    <td>{{$productts->Brakes_Rear}}</td>
                                </tr>
                                <tr class="tr ">
                                    <td>Dimension and Weight Length(mm)</td>
                                    <td>{{$productt->Dimensions_and_Weight_Length}}</td>
                                    <td>{{$productts->Dimensions_and_Weight_Length}}</td>
                                </tr>
                                <tr class="tr color1">
                                    <td>Dimension and Weight Width(mm)</td>
                                    <td>{{$productt->Dimensions_and_Weight_Width}}</td>
                                    <td>{{$productts->Dimensions_and_Weight_Width}}</td>
                                </tr>
                                <tr class="tr ">
                                    <td>Dimension and Weight Height(mm)</td>
                                    <td>{{$productt->Dimensions_and_Weight_Height}}</td>
                                    <td>{{$productts->Dimensions_and_Weight_Height}}</td>
                                </tr>
                                <tr class="tr color1">
                                    <td>Dimension and Weight Wheel Base(mm)</td>
                                    <td>{{$productt->Dimensions_and_Weight_wheel_Base}}</td>
                                    <td>{{$productts->Dimensions_and_Weight_wheel_Base}}</td>
                                </tr> 
                            </tbody>
                        </table>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.esm.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.esm.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.min.js') }}"></script>

</body>
</html>



