<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>DekhoEV / Home</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
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
			<section class="hm-banner"><!--Banner-->
				<div class="cnt-blk">
					
					    <div class="container">
    						
					    </div>				
					<!--</form>-->
				</div>			
			</section>
		</section><!--./Banner-->

			<section class="grnBg section-wrap"><!--wheeler-->
				<div class="container">
				<section class="row">
				<aside class="col-md-3 col-sm-6">
				    <a href="/Two-Wheeler-Vehicle-Catalogue" style="color:black;text-decoration:none;">
				        <div class="wheeler-bx">
						<figure><img src="/ic-scooter.png" alt=""></figure>
						<p>2 Wheeler</p>
					</div>
				    </a>
				</aside>
				<aside class="col-md-3 col-sm-6">
				    <a href="/Four-Wheeler-Vehicle-Catalogue" style="color:black;text-decoration:none;">
				        <div class="wheeler-bx">
						<figure><img src="/ic-car.png" alt=""></figure>
						<p> Cars </p>
					</div>
				    </a>
				</aside>
				<aside class="col-md-3 col-sm-6">
					<div class="wheeler-bx">
					    <a href="/Three-Wheeler-Cargo-Vehicle-Catalogue" style="color:black;text-decoration:none;">
					        <figure><img src="/ic-van.png" alt=""></figure>
						    <p>3 Wheeler Cargo</p>
					    </a>
					</div>				
				</aside>
				<aside class="col-md-3 col-sm-6">
					<div class="wheeler-bx">
					    <a href="/Three-Wheeler-Pass-Vehicle-Catalogue" style="color:black;text-decoration:none;">
					        <figure><img src="/ic-auto.png" alt=""></figure>
						    <p>3 Wheeler Passenger</p>
					    </a>
					</div>				
				</aside>
				</section>
				</div>				
			</section>
		</section><!--./wheeler-->
			<section class="section-wrap"><!--All Brands-->
				<div class="container">
					<h2>All Brands</h2>
					<h2>2 Wheelers</h2>  
					<section class="brands-slider">
						@foreach($twospecsoem as $values)
						<div class="view-mdl">
						<div><img src="{{'../UploadImages/BrandMaster/'. $values->OEMImage}}" alt=""></div>
							<button class="text-center"  type="submit" >View Models</button>
						</div>
						@endforeach
					</section>
					<h2>3 Wheeler Passengers</h2>  
					<section class="brands-slider">
						@foreach($threepassoem as $values)
						<div><img src="{{'../UploadImages/BrandMaster/'. $values->OEMImage}}" alt=""></div>
						@endforeach
					</section>
					<h2>3 Wheeler Cargos</h2>  
					<section class="brands-slider">
						@foreach($threecargooem as $values)
						<div><img src="{{'../UploadImages/BrandMaster/'. $values->OEMImage}}" alt=""></div>
						@endforeach
					</section>
					<h2>4 Wheelers</h2>  
					<section class="brands-slider" style="margin-bottom:0">
						@foreach($fourspecsoem as $values)	
						<div><img src="{{'../UploadImages/BrandMaster/'. $values->OEMImage}}" alt=""></div>									
						<!-- <form action="{{URL::to('/Website/4Wheeler_OEM_Search')}}" method="">
							<input type="hidden" name="new_oem_name" id="oem" value="{{$values->new_oem_name}}">							
							<div class="view-mdl">
								<img src="{{ url('/UploadImages/BrandMaster/'. $values->OEMImage)}}" alt="" width="75" height="100">																								
								<button class="text-center"  type="submit" >View Models</button>
							</div>
						</form>	 -->
						@endforeach					
					</section>
					<section >						
						<div></div>						
					</section>
				</div>
			</section><!--./All Brands-->		
			<section class="hm-gyaan">
				<section class="section-wrap">
					<section class="container">
					<h2>EV Gyaan</h2>
					
						<section class="row">	
							@foreach($Posts as $Post)														
								<aside class="col-md-4">										
									<div class="hm-gyaan-bx">
										<form action="/Gyaan/Details" method="GET">
											<input type="hidden" name="Post_id" value="{{$Post->id}}">
											<figure><img src="{{'../UploadImages/Post/'. $Post->Postimage}}"></figure>
											<h3>{{$Post->Posttitle}}</h3>
											<p>{{substr($Post->Postcontent,0,150)}}........</p>
											<button type="submit" class="btn btn-info btn-sm"  > Read more >></button>
										</form>	
									</div>																
								</aside><br>
							   												   
							   @endforeach	
						</section>						
					</section>
				</section>
			</section>
            <footer>
				@include('DekhoevWebsite/footer')
			</footer>
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
