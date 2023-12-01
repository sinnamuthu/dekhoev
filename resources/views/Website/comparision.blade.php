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
                <div class="card main-card" style="width: 100%">
                    <form action="/comparision2" method="GET">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="card m-3 compare-card1">
                                    <div class="add_circle">
                                        <center><i class="fa-solid fa-circle-plus my-3" style="font-size:48px;"></i></center>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <select class="comparision_cars py-3 my-3" name="compare1" id="cars">
                                                <option>Select Brand/Model</option>
                                                @foreach ($userss as $users)
                                                    <option  class="text-center" required>{{ $users->Version_name }}</option>
                                                @endforeach
                                            </select>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="card m-3 compare-card1">
                                    <div class="add_circle">
                                        <center><i class="fa-solid fa-circle-plus my-3" style="font-size:48px;"></i></center>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <select class="comparision_cars py-3 my-3" name="compare2" id="cars">
                                                <option>Select Brand/Model</option>
                                                 @foreach ($userss as $users)
                                                    <option  class="text-center" required>{{ $users->Version_name }}</option>
                                                @endforeach
                                            </select>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        <center><button type="submit" class="btn btn-warning p-3 my-2">Compare Cars</button></center>
                    </div>   
                    </form>
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



