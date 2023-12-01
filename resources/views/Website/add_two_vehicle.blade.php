<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DekoEV|Add Two Vehicle</title>
        {{--  bootstrap css styles  --}}
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('pubic/css/bootstrap-grid.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-grid.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-grid.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-grid.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-reboot.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-utilities.rtl.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/custom1.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/style.css') }}" />
        {{--  font awesome cdn  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

</head>
<body>
    <section class="home_section">
        <div class="header_section">
            @include('Website/header')
        </div>
        <section class="car_comparision_section">
            <div class="container">
                <h5 class="fw-bold py-3">Hyundai Venue Vs Hyundai Grand i10 Nios</h5>
            </div>
            <div class="container-fluid p-3">
                <table class="comparision_car_table1">
                    <tr>
                        <td>
                            <div class="mx-3 py-3">
                                <form action="" method="">
                                    <div class="" style="display:flex; float:left;">
                                           <input type="checkbox" id="features1" name="features1" value="features">
                                           <label for="vehicle1" class="fw-bold text-center">Hide Common Feature</label><br>
                                    </div>
                                    <div class="my-2" style="display:flex;float:left">
                                        <input type="checkbox" id="features2" name="features2" value="features">
                                        <label for="vehicle2" class="fw-bold text-center"> Highlight Features</label><br>
                                    </div>
                                    <div class="mt-5 pt-5" >
                                        <h5 class="fw-bold">Overview</h5>
                                    </div>
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <img class="card-img-top p-2" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title fw-bold">Hyundai Venue</p>
                                    <p class="card-text fw-bold car_compare_amount">₹14,000000 Laksh onwards</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <img class="card-img-top p-2" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title fw-bold">Hyundai Venue</p>
                                    <p class="card-text fw-bold car_compare_amount">₹14,000000 Laksh onwards</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <img class="card-img-top p-2" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title fw-bold">Hyundai Venue</p>
                                    <p class="card-text fw-bold car_compare_amount">₹14,000000 Laksh onwards</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <img class="card-img-top p-2" src="{{ url('public/UploadImages/Website/car1.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title fw-bold">Hyundai Venue</p>
                                    <p class="card-text fw-bold car_compare_amount">₹14,000000 Laksh onwards</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Make Model</td>
                        <td>BMW</td>
                        <td>NEXON</td>
                        <td>SUV</td>
                        <td>INNOVA</td>
                    </tr>
                </table>
            </div>
        </section>
        
        <div class="footer_section">
            @include('Website/footer')
        </div>
    </section>


    {{--  bootstrap js files  --}}
<script type="text/javascript" src="{{ URL('public/js/bootstrap.bundle.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.esm.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.esm.min.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/custom.js') }}"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</body>
</html>
