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
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>		

	
.sharebutton{
          float:right !important;
        }

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
					@media (max-width: 1199px){
						.hm-gyaan-bx.gyaan h2 {min-height: 120px !important;}
					}
					@media (max-width: 991px){
						.hm-gyaan-bx.gyaan h2 {min-height: 185px !important;}
					}
					@media (max-width: 767px){
						.hm-gyaan-bx.gyaan h2 {min-height: auto !important;}
					}
					@media (max-width: 575px){
						.hm-gyaan-bx.gyaan h2 {min-height: 100px !important;}
					}
					
			</style>
</head>
 <body>


	 <section class="wrapper">

			@include('DekhoevWebsite/header')

		<section class="main-cnt">
			<section class="hm-banner-slider"><!--Banner-->
				<div class="hm-banner banner1"><!--Banner1-->
						<div class="cont-blk-lft">
							<figure><img src="https://dekhoev.com/WebsiteImages/mg-comet-img.png"></figure></div>
						<div class="cont-blk-rgt">
							<figure><img src="https://dekhoev.com/WebsiteImages/mg-txt.png"></figure>
							<div class="btn-wrap"><a href="https://dekhoev.com/4Wheeler_OEM_Search?new_oem_name=MG"><img src="https://dekhoev.com/WebsiteImages/btn-know-more.png"></a></div>
						</div>
				</div>
				<div class="hm-banner banner2"><!--Banner2-->
					<div class="cont-blk-lft">
						<figure><img src="https://dekhoev.com/WebsiteImages/nexon-txt.png"></figure>
						<div class="btn-wrap"><a href="https://dekhoev.com/Four-Wheeler-Product-Details?model_name=Tata&OEM_name=Tata&model_brand=Nexon&model_id=179"><img src="https://dekhoev.com/WebsiteImages/btn-know-more.png"></a></div>
					</div>
					<div class="cont-blk-rgt">
						<figure><img src="https://dekhoev.com/WebsiteImages/nexon-car-img.png"></figure></div>
				</div>
				<div class="hm-banner banner3"><!--Banner3-->
					<div class="cont-blk-rgt">
						<figure><img src="https://dekhoev.com/WebsiteImages/ather-txt.png"></figure>
						<div class="btn-wrap"><a href="https://dekhoev.com/2Wheeler_OEM_Search?new_oem_name=Ather+Energy"><img src="https://dekhoev.com/WebsiteImages/btn-know-more.png"></a></div>
					</div>
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
		<!--	<section class="section-wrap"><!--All Brands--
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
								<img src="{{ url('/UploadImages/BrandMaster/'. $values->OEMImage)}}" alt="" >
								<button class="text-center"  type="submit" >View Models</button>
							</div>
						</form>	 --
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
								<!-- <aside class="col-md-4">
									<div class="hm-gyaan-bx gyaan">
										<form action="/Gyaan/Details" method="GET">
											<input type="hidden" name="Post_id" value="{{$Post->id}}">
											
											<h2 class='gyaanposttitle' >{{$Post->Posttitle}}</h2>
							
											<div class='gyaanpost'>{!! $Post->Postcontent !!}</div>
											<button type="submit" class="btn btn-info btn-sm postbutton"  > Read more >></button>
										</form>
									</div>
								</aside> -->
 
								<aside class="col-md-4">
									<div class="hm-gyaan-bx gyaan">
										<div>
											<input type="hidden" name="Post_id" value="{{$Post->id}}">
											
											<h2 class='gyaanposttitle' >{{$Post->Posttitle}}</h2>
							
											<div class='gyaanpost'>{!! $Post->Postcontent !!}</div>
											<?php	
											$gettitle = str_replace(" ","_",$Post->Posttitle);
											?>
											<button  class="btn btn-info btn-sm  postbutton" > <a href="{{ url('Gyaan/'.$gettitle)}}" class="btn-link"> Read more >></a></button>
											<!-- <button  class="btn btn-info btn-sm  postbutton sharebutton" id="{{ url('Gyaan/'.$gettitle)}}" data="{{$Post->Posttitle}}"> <a href="#" class="btn-link"> Share >></a></button> -->
											<a href="#" class='postbutton sharebutton' id="{{ url('Gyaan/'.$gettitle)}}" data="{{$Post->Posttitle}}"><img src="https://dekhoev.com/WebsiteImages/share.png" alt="sharebutton" style="width:30px;height:30px;"></a>
											<!-- <button type="submit" class="btn btn-info btn-sm postbutton"  > Read more >></button> -->
										</div>
									</div>
				</aside>
								
								
								
								<br>

							   @endforeach
						</section>
					</section>
				</section>
			</section>

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
