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
	<style>
		
		.sharebutton{
          float:right !important;
        }

		.productshare{
			margin-top:0px !important;
		}

		
/* gyan blog css start*/


#search_button {
    position:absolute;
    display: inline;
    text-align: center;
    top:0;
    right:0;
 
}
		.searchtext{
			font-family: fangsong !important;
		}

.nav-item{
	font-family: fangsong !important;

	
}
.ps-form--quick-search .form-control {
    background-color: #fff;
    color: #000;
    height: 42px;
    border: none;
    border-radius: 5px!important;
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;

}

.abss {
    position: absolute;
    left: 95%;
    top: 24%;
    font-size: 20px;
    color: #464855;
}

#cfhfh {
    width: 600px;
    position: relative;

}

.ps-form--quick-search {
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    flex-flow: row nowrap;
}

.navbar>.container-fluid{
	width: auto;
}


		div.firstheader{
			
			background: #464855!important;
		}

header {
padding-top:0px !important;
    padding-bottom: 20px;
}


.navbar-light .navbar-nav .nav-link {

	font-size: 16px !important;
	padding-top: 10px !important;

}

.autocomplete {
  position: relative;
  display: inline-block;
}

input.searchbutton {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input.searchbutton[type=text] {
  background-color: #f1f1f1;
  width: 100%;
  border-radius: 5px;
}

input.searchbutton2[type=submit] {
	background-color: #04AA6D!important;

    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;

    font-size: 12px;
    font-family: 'Source Sans Pro', sans-serif;
    padding: 12px 18px;
	color: #FFFFFF;
	border: none;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

				.gyaanpost{
					inline-size: 387px !important; 
  					overflow: hidden;
					  font-size: 14px !important;
					  height: 191px !important;
					}

					.gyaanposttitle{
						height: 75px !important;
						font-size: 18px !important;
						color:rgb(107, 108, 110) !important;
					}
					.hm-gyaan-bx.gyaan{
						border-radius: 10px !important;
					}
					.postbutton{
						color:white;
						margin-top:20px !important;
 					 left: 150px;
					}

					.postbutton:hover{
						color:#0dcaf0;
						margin-top:20px !important;
						background-color:white;
 					
					}

					

					.hm-gyaan-bx {
							background-color: white !important;
							-webkit-box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.5) !important;
					}

					.postbutton a{
						text-decoration: none !important;
						color: white !important;
					}

					.postbutton a:hover{
						text-decoration: none !important;
						color: #0dcaf0 !important;
					}

/* gyan blog css end*/

#search_button {
    position:absolute;
    display: inline;
    text-align: center;
    top:0;
    right:0;
 
}
		.searchtext{
			font-family: fangsong !important;
		}

.nav-item{
	font-family: fangsong !important;

	
}
.ps-form--quick-search .form-control {
    background-color: #fff;
    color: #000;
    height: 42px;
    border: none;
    border-radius: 5px!important;
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;

}

.abss {
    position: absolute;
    left: 95%;
    top: 24%;
    font-size: 20px;
    color: #464855;
}

#cfhfh {
    width: 600px;
    position: relative;

}

.ps-form--quick-search {
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    flex-flow: row nowrap;
}

.navbar>.container-fluid{
	width: auto;
}


		div.firstheader{
			
			background: #464855!important;
		}

header {
padding-top:0px !important;
    padding-bottom: 20px;
}


.navbar-light .navbar-nav .nav-link {

	font-size: 16px !important;
	padding-top: 10px !important;

}

.autocomplete {
  position: relative;
  display: inline-block;
}

input.searchbutton {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input.searchbutton[type=text] {
  background-color: #f1f1f1;
  width: 100%;
  border-radius: 5px;
}

input.searchbutton2[type=submit] {
	background-color: #04AA6D!important;

    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;

    font-size: 12px;
    font-family: 'Source Sans Pro', sans-serif;
    padding: 12px 18px;
	color: #FFFFFF;
	border: none;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

		.headtitle{
			font-size: 16px !important;
		}
		.electric-bike-bx p.tl {
     	min-height: 0px !important;
   		padding-bottom: 0px !important; 
	
		}

		.font-16{
			font-size:14px !important;
		float:left;
		}
		.price{
			padding-top:10px;
			font-size:14x !important;
			margin-top:-5px !important;

		}

		.productimage{
			/*height: 255px !important;*/
		}

		/* .electric-bike-bx {
    -webkit-box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.5) !important;

		} */

		.electric-bike-bx .btn-view:hover {
    color: #E8803B;
    border: 1px solid #E8803B;
    background-color: white;
}
.electric-bike-bx .btn-view {
    color: #E8803B;
    border: 1px solid #E8803B;
    background-color: white;

}

.view-button{
	font-size:14px !important;
}

.btn-lin{
	text-decoration: none !important;
	color: #E8803B !important;
}

.view-button a{
	font-size:14px !important;
	text-decoration: none !important;
	color: #E8803B !important;
}


/*  tag css*/

.ev-milstart {
	
	content: '' !important;
top: 3px !important;
left: 6px;
width: 6px;
height: 13px;	

background: url(fast-charge.png) no-repeat;

}


.ev-milend {

content: '' !important;
top: 3px !important;
left: 6px;
width: 6px;
height: 13px;	

background: url(energy.png) no-repeat;

}


.bimage{
margin-left:10px;
font-family: Poppins,sans-serif!important;
font-weight: 750!important;
color: #566068;
font-size: 11px;
padding-left:5px;
}


.ev-expand{
	background-color: #e2edf7;
	right: 10px;
top: 10px;
line-height: 18px;
padding: 1px 10px 1px 10px;
border-radius: 13px;
font-size: 11px;
}

.rightend{
float: right;
}

.rightstart{
float: left;
}
.tag-data{
	font-size:10px;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 8px;
}

.imagecontain{
	position: relative;
}

		</style>
 </head>
 <body>
	 <section class="wrapper">
		 
			 @include('DekhoevWebsite/header')
		
		<section class="main-cnt">
			<section class="search-bikes-wrap ashBg">
				<div class="container">
					<section class="search-bikes brand four">
						<h2 class="option-heading">Search Cars by Brand</h2>
						<section class="row option-content is-hidden">
									<div class="view-brands2">						
							@foreach($Oemvalues as $values)												
								<aside class="">
										<form action="{{URL::to('/4Wheeler_OEM_Search')}}" method="">
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
					</section>
					</div>	
					</section>

				<!--- start old module design-->
        
		<section class="electric-bikes-wrap section-wrap-top"><!--Electric Bikes-->
				<div class="container">
				@if(Session::get('new_oem_name'))
					<h2>  {{Session()->get('new_oem_name')}} Car Models </h2>
					@endif
					<section class="row">
					    @foreach($fourwspecs as $values)
    						<aside class="col-md-4">
						        <div class="electric-bike-bx">
						            <form action="/Four-Wheeler-Product-Details" method="get">
									@if($values->Modelimage =="")                                        
									<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" alt="image" class="img-fluid"></figure>                                        
							        @endif 
									@if($values->Modelimage <>"")
        								<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $values->Modelimage)}}" alt="image" class="img-fluid"></figure>
									@endif	

        								<p class="text-center tl">{{$values->Model_Name}} - {{$values->Model_Description}}</p>
        								<p class="text-center">₹{{$values->Price_Ex_Showroom }}/-</p>
        								<input type="hidden" name="model_name" value="{{$values->Model_Name}}">
										<input type="hidden" name="OEM_name" value="{{$values->OEM_name}}">
        								<input type="hidden" name="model_brand" value="{{$values->Model_Family_Brand_Name}}">
        								<input type="hidden" name="model_id" value="{{$values->id}}">
        								<center><button class="btn-view">View Details</button></center>
    								</form>
								</div>
    						</aside>
						</form>
						@endforeach
					</section>	
				</div>
			</section> 
			<!--./Electric Bikes-->

			<!--- End old module design-->

			<!--start new design-->
			<!--end new design-->
    
			<!-- <section class="popular-bikes-wrap section-wrap-btm">Electric Bikes
				<div class="container">
					<div class="popular-bikes ashBg">
						<h2>Popular Cars</h2>
							<section class="popular-bikes-slider">
							    @foreach($fourwspecs as $values)
							    <form action="/Website/Four-Wheeler-Product-Details" method="get">
									<div class="electric-bike-bx">
										<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $values->Modelimage)}}" alt=""></figure>
										<p>{{$values->Model_Name}} - {{$values->Model_Description}}</p>
										<p>₹{{$values->Price_Ex_Showroom}}/-</p>
										<input type="hidden" name="model_name" value="{{$values->Model_Name}}">
										<input type="hidden" name="model_brand" value="{{$values->Model_Family_Brand_Name}}">
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
