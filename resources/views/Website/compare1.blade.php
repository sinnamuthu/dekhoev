<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
          .border{
            border-bottom: 1px black;
          }
        </style>
    </head>
<body>
    <!--header-->
    <div class="container-fluid">
        @include('Website.header')
    </div>
	<div class="container">
	    <h3 class="text-center">Comparison Bikes</h3>
        <div class="row my-3">
            <div class="col-6">
	            <div class="card">
                    <h4 class="text-center">Hero Pro</h4>
                    <img src="{{ url('public/UploadImages/Website/pro.jpg') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-6">
            	<div class="card">
                    <h4 class="text-center">ola S3 Pro</h4>
                    <img src="{{ url('public/UploadImages/Website/pro.jpg') }}" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-5 border">
                <h5 class=""> 6.5s| 120 mph| 130 mph</h5>
            </div>
            <div class="col-2">
               <img src="{{ url('public/UploadImages/Website/download.png') }}" class="card-img-top" alt="...">
                <h5> 0-60 MPH</p>
             </div>
            <div class="col-5 border">
               <h5>4.9s| 3.0s| 3.2s</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-5 border">
                <h5 class=""> 6.5s| 120 mph| 130 mph</h5>
            </div>
            <div class="col-2">
                <img src="{{ url('public/UploadImages/Website/top1.png') }}" class="card-img-top" alt="...">
                <h5> Top Speed</p>
            </div>
            <div class="col-5 border">
                <h5>4.9s| 3.0s| 3.2s</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-5 border">
                <h5 class=""> 6.5s| 120 mph| 130 mph</h5>
            </div>
            <div class="col-2">
                <img src="{{ url('public/UploadImages/Website/range.png') }}" class="card-img-top" alt="...">
                <h5> Range</p>
            </div>
            <div class="col-5 border">
                <h5>4.9s| 3.0s| 3.2s</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-5 border">
                <h5 class=""> 6.5s| 120 mph| 130 mph</h5>
            </div>
            <div class="col-2">
               <img src="{{ url('public/UploadImages/Website/battery.png') }}" class="card-img-top" alt="...">
                <h5> Battery</p>
            </div>
            <div class="col-5 border">
                <h5>4.9s| 3.0s| 3.2s</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-5 border">
                <h5 class=""> 6.5s| 120 mph| 130 mph</h5>
            </div>
            <div class="col-2">
                <img src="{{ url('public/UploadImages/Website/cargo.jpg') }}" class="card-img-top " style="margin-right:350px"alt="...">
                <h5> Cargo Space</p>
            </div>
            <div class="col-5 border">
                <h5>4.9s| 3.0s| 3.2s</h5>
            </div>
        </div>
         <div class="row">
            <div class="col-5 border">
                <h5 class=""> 6.5s| 120 mph| 130 mph</h5>
            </div>
            <div class="col-2">
                <img src="{{ url('public/UploadImages/Website/print.jpg') }}" class="card-img-top " style="margin-right:350px"alt="...">
                <h5> Seats</h5>
            </div>
            <div class="col-5 border">
               <h5>4.9s| 3.0s| 3.2s</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-5 border">
               <h5 class=""> 6.5s| 120 mph| 130 mph</h5>
            </div>
            <div class="col-2">
                <img src="{{ url('public/UploadImages/Website/booster.jpg') }}" class="card-img-top " style="margin-right:350px"alt="...">
                <h5> Booster</p>
            </div>
            <div class="col-5 border">
               <h5>4.9s| 3.0s| 3.2s</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-5 border">
                <h5 class=""> 6.5s| 120 mph| 130 mph</h5>
                </div>
            <div class="col-2">
                <img src="{{ url('public/UploadImages/Website/weight.jpg') }}" class="card-img-top " style="margin-right:350px"alt="...">
                <h5> Max Pro</p>
            </div>
            <div class="col-5 border">
            <h5>4.9s| 3.0s| 3.2s</h5>
        </div>
    </div>
    <!--footer-->
    <div class="container-fluid">
        @include('Website.footer')
    </div>
</body>
</html>