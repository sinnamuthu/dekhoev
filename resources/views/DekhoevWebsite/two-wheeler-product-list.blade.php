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
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
 </head>
 <body>
	 <section class="wrapper">
			 @include('DekhoevWebsite/header')
		<section class="main-cnt">
			<section class="search-bikes-wrap">
				<div class="container">
					<section class="search-bikes ashBg"><!--wheeler-->
						<h2>Search Bikes by Brand</h2>
							<section class="row">
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-hero.png')}}" alt=""></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-honda.png')}}" alt=""></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-tvs.png')}}" alt=""></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-bajaj.png')}}" alt=""></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-suzuki.png')}}" alt=""></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/logo-ktm.png')}}" alt=""></figure>
								</aside>
							</section>
							<a href="javascript:;" class="link">View All Brands ></a>
						</section>
					</section><!--./wheeler-->
					</div>	
					</section>
        
			<section class="electric-bikes-wrap section-wrap-top"><!--Electric Bikes-->
				<div class="container">
					<h2>Electric Bikes in India</h2>
					<section class="row">
					    @foreach($twowspecs as $values)
    						<aside class="col-md-4">
						        <div class="electric-bike-bx">
						            <form action="/Two-Wheeler-Product-Details" method="get">
        								<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $values->Modelimage)}}" alt="image" width="300" height="250"></figure>
        								<p class="text-center">{{$values->Model_Name}}</p>
        								<p class="text-center">₹{{$values->Price_Ex_Showroom}}/-</p>
        								<input type="hidden" name="model_name" value="{{$values->Model_Name}}">
        								<input type="hidden" name="model_id" value="{{$values->id}}">
        								<!--<a type="submit" class="btn-view" href="javascript:;">View Details</a>-->
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
    
			<!--<section class="popular-bikes-wrap section-wrap-btm"><!--Electric Bikes-->-->
			<!--	<div class="container">-->
			<!--		<div class="popular-bikes ashBg">-->
			<!--			<h2>Popular Bikes</h2>-->
			<!--				<section class="popular-bikes-slider">-->
			<!--				    @foreach($twowspecs as $values)-->
			<!--						<div class="electric-bike-bx">-->
			<!--						     <form action="/Website/Two-Wheeler-Product-Details" method="get">-->
			<!--							<figure><img src="{{ url('/public/UploadImages/NewModel/Twowheelerspecsfeature/'. $values->Modelimage)}}" alt=""></figure>-->
			<!--								<p>{{$values->Model_Name}}</p>-->
			<!--					            <p>₹{{$values->Price}}/-</p>-->
			<!--					            <input type="hidden" name="model_name" value="{{$values->Model_Name}}">-->
   <!--     								    <input type="hidden" name="model_id" value="{{$values->id}}">-->
			<!--							<center><button class="btn-view">View Details</button></center>-->
			<!--						</div>-->
			<!--						</form>-->
			<!--					@endforeach-->
			<!--				</section>-->
			<!--				<a href="javascript:;" class="link">View All Popular Bikes</a>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</section>-->

				@include('DekhoevWebsite/footer')
	 </section> 
  	 <section class="script">
	     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	    <script type="text/javascript" src="../js/bootstrap1.min.js"></script>
    	<script type="text/javascript" src="../js/common.js"></script>
    	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    	<script type="text/javascript" src="../js/slick.min.js"></script>
	 </section>
 </body>
</html>
@endsection
