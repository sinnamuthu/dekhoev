<html>
  <head>
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
    <link rel="stylesheet" type="text/css" href="{{ url('../../public/css/custom.css') }}" />
    <style>
      
      .btn-primary {
        color: black;
        background-color: #ffffff;
        border-color: black;
    }
    </style>
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="section-title position-relative pb-3 mb-5">
                        <!-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> -->
        <h1 class="mb-0">What Do You Want to Compare? </h1>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="card" onclick="show()">
          <img src="{{ url('public/UploadImages/Website/car_after.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cars</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="card" onclick="show()">
          <img src="{{ url('public/UploadImages/Website/car_after.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SUV</h5> 
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="card" onclick="show()">
          <img src="{{ url('public/UploadImages/Website/car_after.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">E-Scooter</h5>
            </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="card" onclick="show()">
          <img src="{{ url('public/UploadImages/Website/car_after.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">E-bike</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="card" onclick="show()">
          <img src="{{ url('public/UploadImages/Website/car_after.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">E-3Wheeler</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container" id="compare" style="display:none;">
    <div class="row my-5">
      <div class="col-3 text-center">

      </div>
      <div class="col-3 text-center">
        <div class="card">
          <img src="{{ url('public/UploadImages/Website/plus-icon.jpg') }}" class="card-img-top" alt="..." type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Products</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <select name="product_name" id="product_name" placeolder="Select Product" required>
                                <option class="text-center" value="" required> Select Product</option> 
                                @foreach ($userss as $users)
                                    <option  class="text-center" required>{{ $users->Model_Name }} {{ $users->Modelimage }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="col-3 text-center">
        <div class="card">
          <img src="{{ url('public/UploadImages/Website/plus-icon.jpg') }}" class="card-img-top" alt="..." type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">
          <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Products</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <select name="product_name" id="product_name" placeolder="Select Product" required>
                                <option class="text-center" value="" required> Select Product</option> 
                                @foreach ($userss as $users)
                                    <option  class="text-center" required>{{ $users->Model_Name }} {{ $users->Modelimage }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="col-3 text-center">

      </div>
    </div>
    <div class="text-center">
      <button type="button" class="btn btn-primary"
          style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
      Compare
      </button>
    </div>
  </div> 
  
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.esm.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.esm.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../../public/js/bootstrap.min.js') }}"></script>
  <script>
    function show(){
      document.getElementById('compare').style.display="block";
    }
  </script>
</body>
</html>



