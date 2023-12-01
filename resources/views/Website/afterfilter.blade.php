<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          
          .btn-primary {
            color: black;
            background-color: #ffffff;
            border-color: black;
        }
        
        .checked {
          color: black;
        }
        .star{
          margin-left: 50px;
        }
        .color{
          color: black;
        }
        </style>
    </head>

    <body>
        <!--header-->
        <div class="container-fluid">
            @include('Website.header')
        </div>
        <div class="container">
            <div class="row">
                <div class="section-title position-relative pb-3 mb-5">
                                <!-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> -->
                    <h1 class="mb-0">OLA Bikes </h1>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card mb-5">
                            <img src="{{ url('public/UploadImages/Website/s1pro.jpg') }}" class="card-img-top color" alt="...">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary fw-bold" type="button">Ola S1 Pro</button>
                                <div class="section-title position-relative pb-1 mb-2">
                                    <h5 class="text-center">1,40,000-1,50,000 </h5>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked" ></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <p class="">1.75k reviews </p>
                                     </div>
                                    <div class="row">
                                        <div class="col-4"> 
                                            <p class="">3.97KWH </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="">390mins</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="">181KMPL </p>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary fw-bold" type="button">Read more</button>
                                <button class="btn btn-primary fw-bold mb-5" type="button">Add To Compare</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                         <div class="card mb-5">
                            <img src="{{ url('public/UploadImages/Website/s1pro.jpg') }}" class="card-img-top" alt="...">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary fw-bold" type="button">Ola S3 Pro</button>
                                    <div class="section-title position-relative pb-1 mb-2">
                                        <h5 class="text-center">1,40,000-1,50,000 </h5>
                                        <div class=" star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked" ></span>
                                            <span class="fa fa-star checked" ></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <p class="">1.75k reviews </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-4"> 
                                                <p class="">3.97KWH</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="">390mins</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="">181KMPL</p>
                                            </div>
                                        </div>
                                        </div>
                                        <button class="btn btn-primary fw-bold" type="button">Check On Road Price</button>
                                        <button class="btn btn-primary fw-bold mb-5" type="button">Add To Compare</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>






