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
			 @include('DekhoevWebsite/header')
		<section class="main-cnt">
			<section class="search-3W Cargo-wrap">
				<div class="container">
					<section class="search-3W Cargo ashBg"><!--wheeler-->
						<h2>Search  3Wheeler Cargo by Brand</h2>
							<section class="row">
								<aside class="col-md-2">
										<figure><img src="{{ url('/threewheeleratul.png')}}" alt=""  height="150" width="180"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/threewheelereuler.jpg')}}" alt=""  height="150" width="180"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/threewheelerkineticgreen.jpg')}}" alt=""  height="150" width="180"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/Threewheelermahindralogo.png')}}" alt=""  height="150" width="180"></figure>
								</aside>
								<aside class="col-md-2">
										<figure><img src="{{ url('/threewheelerpiaggio.png')}}" alt=""  height="150" width="200"></figure>
								</aside>
								<!--<aside class="col-md-2">-->
								<!--		<figure><img src="{{ url('public/WebsiteImages/threewheelercargo/logo-ktm.png')}}" alt=""></figure>-->
								<!--</aside>-->
							</section>
							<a href="javascript:;" class="link">View All Brands ></a>
						</section>
					</section><!--./wheeler-->
					</div>	
					</section>
        
			<section class="electric-bikes-wrap section-wrap-top">
				<div class="container">
					<h2>3Wheeler Cargo in India</h2>
					<section class="row">
					     @foreach($threewcargo as $values)
    						<aside class="col-md-4">
						        <div class="electric-bike-bx">
						            <form action="/Three-Wheeler-Cargo-Product-Details" method="get">
        								<figure><img src="{{ url('/UploadImages/NewModel/Threewheelercargofeature/'. $values->Modelimage)}}" alt="image" width="300" height="250"></figure>
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

				@include('DekhoevWebsite/footer')
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
