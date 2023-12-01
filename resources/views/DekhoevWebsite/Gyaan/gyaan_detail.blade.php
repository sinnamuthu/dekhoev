<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@foreach($Posts as $values)
  <meta name="Keywords" content="{{$values->meta_keyword}}">
  <meta name="Description" content="{{$values->meta_description}}">
  <title>{{$values->meta_title}}</title>
  @endforeach
  <link rel="icon" type="image/x-icon" href="/icon.png">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/css/slick.css" />
	<link rel="stylesheet" type="text/css" href="/css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="/css/dgv-responsive.css" />
	<script src='/js/jquery-3.6.0.min.js'></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/slick.min.js"></script>
	<script src="/js/common.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
			integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
			crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
	<style>

		
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
</style>
 </head>
 <body>
	 <section class="wrapper">
	 	
			@include('DekhoevWebsite/header')
		
		<section class="main-cnt">			
			<section class="hm-gyaan dt">
				<section class="section-wrap">
					<section class="container">
						<section class="row">
                            @foreach($Posts as $values)
						<!-- 	<aside class="col-md-6">
								<figure><img src="{{'/UploadImages/Post/'. $values->Postimage}}"></figure>
							</aside> -->
							<aside class="">
								<div class="hm-gyaan-bx gyaan dt">									
                <h2>{{$values->Posttitle}}<span>			<?php	
											$gettitle = str_replace(" ","_",$values->Posttitle);

											?><a href="#" class=' sharebutton' id="{{ url('Gyaan/'.$gettitle)}}" data="{{$values->Posttitle}}"><img src="https://dekhoev.com/WebsiteImages/share.png" alt="sharebutton" style="width:30px;height:30px;"></a></span></h2>
									<!-- <small>short by Shalini Ojha / 11:37 am on 20 Dec 2022,Tuesday</small> -->
									<!-- <h3>{{$values->Postcontent}}</h3> -->
									{!! $values->Postcontent !!}
                 
									<div class="media-blk clearfix">
										<ul>
											<li class="fb"><a href="javascript:;">facebook</a></li>
											<li class="wa"><a href="javascript:;">whatsapp</a></li>
											<li class="in"><a href="javascript:;">instagram</a></li>
											<li class="tw"><a href="javascript:;">twitter</a></li>
										</ul>
									</div>	
								</div>						
							</aside>
                            @endforeach
						</section>
					</section>
				</section>
			</section>
			</section>
			
				@include('DekhoevWebsite/footer')
			
	 </section>  
 </body>
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
</html>
