<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DekoEV|Comparision</title>
        {{--  bootstrap css styles  --}}
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.min.css') }}" />
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
        <section class="compare_section">
            <div class="container compare_div">
                <div class="row py-5 px-3">
                    <h2 class="text-center my-3 fw-bold">What Do You Want to Compare?</h2>
                    <div class="col-3">
                        <div class="card pt-2 text-center compare_card" onclick="twowheeler()">
                            <img class="card-img-top " src="{{ url('public/UploadImages/Website/twowheel.png') }}" alt="Two Wheeler">
                            <h5 class="text-center fw-bold">2 Wheeler</h5>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card pt-2 text-center compare_card"onclick="fourwheeler()">
                            <img class="card-img-top " src="{{ url('public/UploadImages/Website/fourwheel.png') }}" alt="Four Wheeler "> 
                            <h5 class="text-center fw-bold">4 Wheeler</h5>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card pt-2 text-center compare_card"onclick="threewheelercargo()">
                            <img class="card-img-top" src="{{ url('public/UploadImages/Website/threewheelcargo.png') }}" alt="Three Wheeler Cargo">
                            <h5 class="text-center fw-bold">3 Wheeler Cargo</h5>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card pt-2 text-center compare_card"onclick="threewheelerpass()">
                            <img class="card-img-top" src="{{ url('public/UploadImages/Website/threewheelpass.png') }}" alt="Three Wheeler Pass">
                            <h5 class="text-center fw-bold">3 Wheeler Pass</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="compare_products1 my-5" id="product" style="display:none">
            <div class="container">
                <form action="" method="">
                    <div class="card py-3 px-5">
                        <div class="row">
                            <div class="col-3">
                                <div class="card compare_add_card" style="height:200px;">
                                    <div class=" text-center addvehicle">
                                        <i class="fa-solid fa-plus " style="font-size:34px;"></i>
                                        <h5>Add Vehicle</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card compare_add_card" style="height:200px;">
                                    <div class=" text-center addvehicle">
                                        <i class="fa-solid fa-plus " style="font-size:34px;"></i>
                                        <h5>Add Vehicle</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card compare_add_card" style="height:200px;">
                                    <div class=" text-center addvehicle">
                                        <i class="fa-solid fa-plus " style="font-size:34px;"></i>
                                        <h5>Add Vehicle</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card compare_add_card" style="height:200px;">
                                    <div class=" text-center addvehicle">
                                        <i class="fa-solid fa-plus " style="font-size:34px;"></i>
                                        <h5>Add Vehicle</h5>
                                    </div>
                                </div>
                            </div>
                            <center><button type="submit" class="add_vehicle_btn my-3 px-3 fw-bold">Add Vehicle</button></center>
                        </div>
                    </div>
                </form>
            </div>
        </section>
<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
<!--  Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<!--<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
<!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--        ...-->
<!--      </div>-->
<!--      <div class="modal-footer">-->
<!--        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
<!--        <button type="button" class="btn btn-primary">Save changes</button>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
        <div class="footer_section">
            @include('Website/footer')
        </div>
    </section>


    {{--  bootstrap js files  --}}
<script type="text/javascript" src="{{ URL('public/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL('public/js/custom.js') }}"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
function twowheeler() {
  var x = document.getElementById("product");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
function fourwheeler() {
  var x = document.getElementById("product");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
function threewheelercargo() {
  var x = document.getElementById("product");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
function threewheelerpass() {
  var x = document.getElementById("product");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

</body>
</html>
