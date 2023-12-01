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
			<section class="search-bikes-wrap ashBg">
			<div class="container">
					<section class="search-bikes brand"><!--wheeler-->
						<h2 class="option-heading">Search Bikes by Brand</h2>
						<section class="row option-content is-hidden">
									<div class="view-brands2">						
							@foreach($Oemvalues as $values)												
								<aside class="">
										<form action="{{URL::to('/2Wheeler_OEM_Search')}}" method="">
											<input type="hidden" name="new_oem_name" id="oem" value="{{$values->new_oem_name}}">
											<div class="view-mdl">											
											<figure><h6>{{$values->new_oem_name}}</h6><img src="{{ url('/UploadImages/BrandMaster/'. $values->OEMImage)}}" alt="" class="img-fluid"></figure>									
											<button class="text-center"  type="submit" >View Models</button>
											</div>
									    </form>			
							</aside>
							@endforeach
									</div>				
							</section>
						</section>
					</section><!--./wheeler-->
					</div>	
					</section>
        
			<section class="electric-bikes-wrap section-wrap-top"><!--Electric Bikes-->
				<div class="container">

					@if(Session::get('new_oem_name'))
					<h2>  {{Session()->get('new_oem_name')}} Electric Bikes Models </h2>
					@endif
					<section class="row">
					    @foreach($twowspecs as $values)
    						<aside class="col-md-4">
						        <div class="electric-bike-bx">
						            <form action="/Two-Wheeler-Product-Details" method="get">
									@if($values->Modelimage =="")                                        
									<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/2W.png')}}" alt="image" class="img-fluid"></figure>                                        
							        @endif 
									@if($values->Modelimage <>"")
        								<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $values->Modelimage)}}" alt="image" class="img-fluid"></figure>
									@endif 
        								<p class="text-center tl">{{$values->Model_Name}} - {{$values->Model_Description}} </p>
        								<p class="text-center">₹{{$values->Price_Ex_Showroom }}/-</p>
        								<input type="hidden" name="model_name" value="{{$values->Model_Name}}">
										<input type="hidden" name="OEM_name" value="{{$values->OEM_name}}">
        								<input type="hidden" name="model_brand" value="{{$values->Model_family_Brand_Name}}">
        								<input type="hidden" name="model_id" value="{{$values->id}}">
        								<!--<a type="submit" class="btn-view" href="javascript:;">View Details</a>-->
        								<center><button class="btn-view">View Details</button></center>
    								</form>
								</div>
    						</aside>
						@endforeach
					</section>
				</div>

			</section>
			<!--./Electric Bikes-->
    
			<!-- <section class="popular-bikes-wrap section-wrap-btm">Electric Bikes
				<div class="container">
					<div class="popular-bikes ashBg">
						<h2>Popular Bikes</h2>
							<section class="popular-bikes-slider">
							    @foreach($twowspecs as $values)
									<div class="electric-bike-bx">
									     <form action="/Website/Two-Wheeler-Product-Details" method="get">
										<figure><img src="{{ url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $values->Modelimage)}}" alt=""></figure>
											<p>{{$values->Model_Name}} - {{$values->Model_Description}}</p>
								            <p>₹{{$values->Price_Ex_Showroom}}/-</p>
								            <input type="hidden" name="model_name" value="{{$values->Model_Name}}">
								            <input type="hidden" name="model_brand" value="{{$values->Model_family_Brand_Name}}">
        								    <input type="hidden" name="model_id" value="{{$values->id}}">
										<center><button class="btn-view">View Details</button></center>
									</div>
									</form>
								@endforeach
							</section>
							<a href="javascript:;" class="link">View All Popular Bikes</a>
							</div>
						</div>
					</section> -->




			
				@include('DekhoevWebsite/footer')
			
	 </section> 
  	 <section class="script">
	     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	    <script type="text/javascript" src="../js/bootstrap1.min.js"></script>
    	<script type="text/javascript" src="../js/common.js"></script>
    	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    	<script type="text/javascript" src="../js/slick.min.js"></script>
	 </section>
	 <a href="javascript:" id="return-to-top"><img src="{{ url('http://dekhoev.com/WebsiteImages/up-arrow.png') }}"></a>
 </body>
</html>
@endsection
<!--  -->