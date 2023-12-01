@extends('layout.layout')
@section('content')
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>DekhoEV /Vehicle Catelogue</title>
  <link rel="icon" type="image/x-icon" href="/icon.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
 </head>
 <body>
	 <section class="wrapper">
		 <header>
			 @include('DekhoevWebsite/header')
		</header>
		<section class="main-cnt">
			<section class="search-bikes-wrap">
				<div class="container">
					<section class="search-bikes ashBg"><!--wheeler-->
						<h2>Search Cars by Brand</h2>
							<section class="row">
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-mercedesbenz.png')}}" alt="" class="img-fluid"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-jaguar.png')}}" alt="" class="img-fluid"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-volvo.png')}}" alt="" class="img-fluid"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-toyota.png')}}" alt="" class="img-fluid"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-tata.png')}}" alt="" class="img-fluid"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-hyundai.png')}}" alt="" class="img-fluid"></figure>
								</aside>
							</section>
							<a href="javascript:;" class="link">View All Brands ></a>
						</section>
					</section><!--./wheeler-->
					</div>	
					</section>
        
			<section class="electric-bikes-wrap section-wrap-top"><!--Electric Bikes-->
				<div class="container">
					<h2>Cars in India</h2>
					<section class="row">
					    @foreach($fourwspecs as $values)
    						<aside class="col-md-4">
						        <div class="electric-bike-bx">
						            <form action="/Four-Wheeler-Product-Details" method="get">
        								<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $values->Modelimage)}}" alt="image" width="300" height="250"></figure>
        								<p class="text-center">{{$values->Model_Name}}</p>
        								<p class="text-center">₹{{$values->Price_Ex_Showroom}}/-</p>
        								<input type="hidden" name="model_name" value="{{$values->Model_Name}}">
        								<input type="hidden" name="model_id" value="{{$values->id}}">
        								<center><button class="btn-view">View Details</button></center>
    								</form>
								</div>
    						</aside><br>
						</form>
						@endforeach
					</section>	
				</div>
			</section>
			<!--./Electric Bikes-->




			<footer class="section-wrap">
				@include('DekhoevWebsite/footer')
			</footer>
	 </section>  
  	 <section class="script">
	    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<script type="text/javascript" src="{{ URL('public/js/bootstrap1.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL('public/js/slick.min.js') }}"></script>
    	<script type="text/javascript" src="{{ URL('public/js/common.js')}}"></script>
	 </section>
 </body>
</html>
@endsection
