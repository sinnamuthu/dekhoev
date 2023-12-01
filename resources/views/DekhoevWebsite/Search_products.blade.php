@extends('layout.layout')
@section('content')
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>All Vehicles</title>
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
			<!--./Electric Vehicles-->
			
				<section class="popular-bikes-wrap section-wrap-btm">
				<div class="container">
					<div class="popular-bikes ashBg">
						<h2>Popular EV vehicles</h2>
							<section class="popular-bikes-slider">
							    @foreach($threewcargo as $values)
							    <form action="/Three-Wheeler-Cargo-Product-Details" method="get">
									<div class="electric-bike-bx">
										<figure><img src="{{ url('/public/UploadImages/NewModel/Threewheelercargofeature/'. $values->Modelimage)}}" alt=""></figure>
										<p>{{$values->Model_Name}}<br>₹{{$values->Price_Ex_Showroom}}/-</p>
										<input type="hidden" name="model_name" value="{{$values->Model_Name}}">
        								<input type="hidden" name="model_id" value="{{$values->id}}">
        								<center><button class="btn-view">View Details</button></center>
									</div>
									</form>
									@endforeach
							</section>
							</div>
						</div>
					</section>
				<section class="popular-bikes-wrap section-wrap-btm">
				<div class="container">
					<div class="popular-bikes ashBg">
						<h2>Popular EV vehicles</h2>
							<section class="popular-bikes-slider">
							    @foreach($twowspecs as $items)
							    <form action="/Three-Wheeler-Cargo-Product-Details" method="get">
									<div class="electric-bike-bx">
										<figure><img src="{{ url('/public/UploadImages/NewModel/Twowheelerspecsfeature/'. $items->Modelimage)}}" alt=""></figure>
										<p>{{$items->Model_Name}}<br>₹{{$items->Price_Ex_Showroom}}/-</p>
										<input type="hidden" name="model_name" value="{{$items->Model_Name}}">
        								<input type="hidden" name="model_id" value="{{$items->id}}">
        								<center><button class="btn-view">View Details</button></center>
									</div>
									</form>
									@endforeach
							</section>
							</div>
						</div>
					</section>
					
			    <section class="popular-bikes-wrap section-wrap-btm">
				<div class="container">
					<div class="popular-bikes ashBg">
						<h2>Popular EV vehicles</h2>
							<section class="popular-bikes-slider">
							    @foreach($threewcargo as $data)
							    <form action="/Three-Wheeler-Cargo-Product-Details" method="get">
									<div class="electric-bike-bx">
										<figure><img src="{{ url('/public/UploadImages/NewModel/Fourwheelerspecsfeature/'. $data->Modelimage)}}" alt=""></figure>
										<p>{{$data->Model_Name}}<br>₹{{$data->Price_Ex_Showroom}}/-</p>
										<input type="hidden" name="model_name" value="{{$data->Model_Name}}">
        								<input type="hidden" name="model_id" value="{{$data->id}}">
        								<center><button class="btn-view">View Details</button></center>
									</div>
									</form>
									@endforeach
							</section>
							</div>
						</div>
					</section>

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
