@extends('layout.layout')
@section('content')
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@foreach($metadescription as $values)
  <meta name="Keywords" content="{{$values->keyword}}">
  <meta name="Description" content="{{$values->description}}">
  <title>{{$values->title}}</title>
  @endforeach
  <link rel="icon" type="image/x-icon" href="/icon.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
			height: 255px !important;
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
			<section class="search-3W Cargo-wrap ashBg">
				<div class="container">
					<section class="search-3W Cargo brand" style="padding:0"><!--wheeler-->
						<h2 class='headtitle'>Search  3 Wheeler Passenger by Brand</h2>
						<section class="row">	
									<div class="view-brands2">						
							@foreach($Oemvalues as $values)												
								<aside class="">
										<form action="{{URL::to('/3Wheeler_Pass_OEM_Search')}}" method="">
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
        
			<section class="electric-bikes-wrap section-wrap-top">
				<div class="container">
					<h2 class='headtitle'>3Wheeler Passenger in India</h2>
					<section class="row">
					     @foreach($threewpass as $values)
    						<!-- <aside class="col-md-3">
						        <div class="electric-bike-bx">
						            <form action="/Three-Wheeler-Pass-Product-Details" method="get">
									@if($values->Modelimage =="")                                        
									<figure><img src="{{ url('/UploadImages/NewModel/Threewheelerpassfeature/3WP.png')}}" alt="{{$values->altimageget}}" class="img-fluid productimage"></figure>                                       
							        @endif 
									@if($values->Modelimage <>"")
        								<figure><img src="{{ url('/UploadImages/NewModel/Threewheelerpassfeature/'. $values->Modelimage)}}" alt="{{$values->altimageget}}" class="img-fluid productimage"></figure>
									@endif	
										<p class="tl font-16">{{$values->Model_Name}} -  {{$values->Model_Description}} </p>
										<br>
        								<p class="font-16">₹{{$values->Price_Ex_Showroom}}/-</p>
        								<input type="hidden" name="model_name" value="{{$values->Model_Name}}">
										<input type="hidden" name="OEM_name" value="{{$values->OEM_name}}">
        								<input type="hidden" name="model_brand" value="{{$values->Model_Family_Brand_Name}}">
        								<input type="hidden" name="model_id" value="{{$values->id}}">
        								<center><button class="btn-view view-button">View Details</button></center>
    								</form>
								</div>
    						</aside> -->

							<aside class="col-md-3">
						        <div class="electric-bike-bx">
						            <div class="imagecontain">
									@if($values->Modelimage =="")                                        
									<figure><img src="{{ url('/UploadImages/NewModel/Threewheelerpassfeature/3WP.png')}}" alt="{{$values->altimageget}}" class="img-fluid productimage"></figure>                                       
							        @endif 
									@if($values->Modelimage <>"")
        								<figure><img src="{{ url('/UploadImages/NewModel/Threewheelerpassfeature/'. $values->Modelimage)}}" alt="{{$values->altimageget}}" class="img-fluid productimage"></figure>
									@endif	
										<p class="tl font-16">{{$values->Model_Name}} -  {{$values->Model_Description}} </p>
										<br>
        								<p class="font-16">₹{{$values->Price_Ex_Showroom}}/-</p>
        								<!-- <input type="hidden" name="model_name" value="{{$values->Model_Name}}">
										<input type="hidden" name="OEM_name" value="{{$values->OEM_name}}">
        								<input type="hidden" name="model_brand" value="{{$values->Model_Family_Brand_Name}}">
        								<input type="hidden" name="model_id" value="{{$values->id}}">
        								<center><button class="btn-view view-button">View Details</button></center> -->
										<div class="top-right"><span class="ev-expand rightend"><span class="ev-milend ev-dekho"><span class="bimage">{{$values->Driving_Range_on_Full_Charge__AvgEstimated__Mileage}}</span><span class='tag-data'> Kms</span></span></span></div>
										<?php	
										$Model_Name = str_replace(" ","_",$values->Model_Name);
											$Model_Description = str_replace(" ","_",$values->Model_Description);
											?><a href="#" class='postbutton productshare sharebutton' style='margin-top: 0px !important;'id="{{ url('Three-Wheeler-Pass/'.$Model_Name.'-'.$Model_Description)}}" data="{{$values->Model_Name}}-{{$values->Model_Description}}"><img src="https://dekhoev.com/WebsiteImages/share.png" alt="sharebutton" style="width:30px;height:30px;"></a>
										<button class="btn-view view-button"><a href="{{ url('Three-Wheeler-Pass/'.$Model_Name.'-'.$Model_Description) }}" class="btn-link">  View Details</a></button>
										</div>
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
						<h2>Popular 3W Passenger vehicles</h2>
							<section class="popular-bikes-slider">
							    @foreach($threewpass as $values)
							    <form action="/Website/Three-Wheeler-Pass-Product-Details" method="get">
									<div class="electric-bike-bx">
										<figure><img src="{{ url('/UploadImages/NewModel/Threewheelerpassfeature/'. $values->Modelimage)}}" alt=""></figure>
										<p>{{$values->Model_Name}} - {{$values->Model_Description}} <br>₹{{$values->Price_Ex_Showroom}}/-</p>
										<input type="hidden" name="model_name" value="{{$values->Model_Name}}">
										<input type="hidden" name="model_brand" value="{{$values->Model_Family_Brand_Name}}">
        								<input type="hidden" name="model_id" value="{{$values->id}}">
        								<center><button class="btn-view">View Details</button></center>
										<a class="btn-view" href="javascript:;">View Details</a>
									</div>
									</form>
									@endforeach
							</section>
							<a href="javascript:;" class="link">View All Popular Bikes</a>
							</div>
						</div>
					</section> -->

					@isset($Posts)
					
					<section class="hm-gyaan">
				<section class="section-wrap">
					<section class="container">
					<h2>EV Gyaan</h2>
						<section class="row">
							@foreach($Posts as $values)
								<!-- <aside class="col-md-4">
									<form action="{{URL::to('/Gyaan/Details')}}" method="GET">
										<div class="hm-gyaan-bx gyaan">
											<input type="hidden" name="Post_id" value="{{$values->id}}">
							
											<h2 class='gyaanposttitle' >{{$values->Posttitle}}</a></h2>
		
											<div class='gyaanpost'>{!! $values->Postcontent !!}</div>
											
											<div class="media-blk clearfix">
											<button type="submit" class="btn btn-info btn-sm  postbutton" > Read more >></button>
												<ul>
													<li class="fb"><a href="javascript:;">facebook</a></li>
													<li class="wa"><a href="javascript:;">whatsapp</a></li>
													<li class="in"><a href="javascript:;">instagram</a></li>
													<li class="tw"><a href="javascript:;">twitter</a></li>
												</ul>
											</div>	
										</div>
									</form>						
								</aside> -->

								<aside class="col-md-4">
									<div >
										<div class="hm-gyaan-bx gyaan">
											<input type="hidden" name="Post_id" value="{{$values->id}}">
							
											<h2 class='gyaanposttitle' >{{$values->Posttitle}}</a></h2>
		
											<div class='gyaanpost'>{!! $values->Postcontent !!}</div>
											
											<div class="media-blk clearfix">
											<?php	
											$gettitle = str_replace(" ","_",$values->Posttitle);
											?>
											<button  class="btn btn-info btn-sm  postbutton" > <a href="{{ url('Gyaan/'.$gettitle)}}" class="btn-link"> Read more >></a></button>

											<a href="#" class='postbutton sharebutton' id="{{ url('Gyaan/'.$gettitle)}}" data="{{$values->Posttitle}}"><img src="https://dekhoev.com/WebsiteImages/share.png" alt="sharebutton" style="width:30px;height:30px;"></a>
												<ul>
													<li class="fb"><a href="javascript:;">facebook</a></li>
													<li class="wa"><a href="javascript:;">whatsapp</a></li>
													<li class="in"><a href="javascript:;">instagram</a></li>
													<li class="tw"><a href="javascript:;">twitter</a></li>
												</ul>
											</div>	
										</div>
										</div>						
								</aside>

 

							@endforeach
						</section>
					</section>
				</section>
			</section>
			@endisset



				@include('DekhoevWebsite/footer')
	 </section>  
  	 <section class="script">
	    {{-- <script src="//code.jquery.com/jquery-1.12.0.min.js"></script> --}}
	     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	    <script type="text/javascript" src="{{ URL('../js/bootstrap1.min.js') }}"></script>
    	<script type="text/javascript" src="{{ URL('../js/common.js')}}"></script>
    	<script type="text/javascript" src="{{ URL('../js/jquery-3.6.0.min.js') }}"></script>
    	<script type="text/javascript" src="{{ URL('../js/slick.min.js') }}"></script>
	 </section>
<a href="javascript:" id="return-to-top"><img src="{{ url('http://dekhoev.com/WebsiteImages/up-arrow.png') }}"></a>


<script>
		$(document).ready(function(){
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

var searchdata = 's';

$.ajax({
      url: '/infos/' + searchdata,
      type: 'get',
      data: {},
      success: function(data) {

		console.log('checkdata',data);

		/*An array containing all the country names in the world:*/
var countries = data;

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);

   }
   });

   $(".sharebutton").click(function(e) {
const post_id = $(this).attr("id");
const post_data = $(this).attr("data");
//const link = 'http://localhost/hypeup/post/' + post_id + '/';
if (navigator.share) {
    navigator.share({
            title: 'My awesome post!',
			text: post_data,
            url: post_id,
        }).then(() => {
            console.log('Thanks for sharing!');
        })
        .catch(err => {
            console.log(`Couldn't share because of`, err.message);
        });
} else {
    console.log('web share not supported');
}});



});
</script>

 </body>
</html>
@endsection
