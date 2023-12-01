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
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<script src='../js/jquery-3.6.0.min.js'></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/slick.min.js"></script>
	<script src="../js/common.js"></script>
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
		<section class="abt">
			<section class="section-wrap">
				<div class="container">
					<h2>Who are You?</h2>
<h3>Are you an existing user or a prospect for an Electric Vehicle?</h3>
<p>If Yes, You have reached the right place to do a quick exploration of EV options in India. at <a href="http://dekhoev.com/Home">dekhoev</a>, you can check out &amp; compare electric two wheelers scooters and bikes, electric three wheeler cargo carriers, electric three wheeler passenger carriers, Electric Cars &amp; Electric SUV s. You can also review any brand owned by you or go through others reviews to make your buying decision. Our interface is designed to give you a heads up in your research and helps you quickly narrow down your choices before you start visiting the showrooms. While we do not ask you to give us your details if you just want to browse <a href="http://dekhoev.com/Home">dekhoev.com</a>, we will request you to register if you are posting a review so that the review credibility is maintained. In case you have any other feedback, please <a href="http://dekhoev.com/Feedback">click here</a> to let us know your views. Alternatively you can write to us <a href="mailto:dekhoev@gmail.com" target="_blank">dekhoev@gmail.com</a> or call us on <a href="tel:9810671205">9810671205</a>.</p>
<h3>Are you an auto enthusiast or a blogger?</h3>
<p>You can contribute towards enhancing others' awareness of various EV brands &amp; options in India by sharing your valuable experience. You can also let us know in case you feel that we need to correct any kind of information on our site. We will request you to register if you are posting a review so that the review credibility is maintained. <a href="http://dekhoev.com/Feedback">click here</a> to give us your feedback on anything related to this website or to express your interest towards being our expert guide (Please include your details in the message body). You may also write to us <a href="mailto:dekhoev@gmail.com" target="_blank">dekhoev@gmail.com</a> or call us on <a href="tel:9810671205">9810671205</a>.</p>
<h3>Are you from an Electric Vehicle OEM?</h3>
<p>You can help our users by answering their queries pertaining to your product.  Also, If you notice any discrepancy, inaccuracy or missing information pertaining to any Model / Price / Feature(s) or Image(s) from YOUR product portfolio, please do let us know about the issue or your concern by <a href="http://dekhoev.com/Feedback">clicking here</a> so that we can address it as soon as possible. Please do not forget to include your details &amp; your organisation's / Brand's details in the message body. For a faster response write to us <a href="mailto:dekhoev@gmail.com" target="_blank">dekhoev@gmail.com</a> or call us on <a href="tel:9810671205">9810671205</a>. As of now we are covering brands in the following categories.</p>
<h4>Electric Two wheelers</h4>
<ol>
	<li>Electric Scooters</li>
	<li>Electric Bikes</li>
</ol>
<h4>Electric 4 Wheelers (personal)</h4>
<ol>
	<li>Electric Cars</li>
	<li>Electric SUV s</li>
</ol>
<h4>Electric Three wheelers</h4>
<ol>
	<li>Electric Three wheelers (cargo)</li>
	<li>Electric three wheelers (passenger).</li>
</ol>					
				</div>			
		</section>
		</section>
				@include('DekhoevWebsite/footer')
	 </section>  
 </body>
 
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



});
</script>
</html>