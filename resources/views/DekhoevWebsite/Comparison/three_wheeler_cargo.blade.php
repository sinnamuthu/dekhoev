<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Three Wheeler Cargo</title>
  <link rel="icon" type="image/x-icon" href="/icon.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
 <div>
 {!! csrf_field() !!}
	 <section class="wrapper">
		 
			 @include('DekhoevWebsite/header')
		
		

		<section class="main-cnt compare-wrap">
				<div class="container">
			<section class="compare-wrap-in section-wrap"><!--wheeler-->
				<section class="row">
							
			<aside class="col-sm-4">
				<div class="add-vehicle">
					<div class="add-vehicle-in">
						<section class="choose-img">								
							<figure class="filename" for="file-input"><img id="imager1" src="{{url('WebsiteImages/comarison_plus_logo.jpeg')}}" class="img-fluid"></figure>							
							<!-- <input name="file" type="file"> -->
						</section>	
						<p>Add Vehicle</p>

						<select class="form-select" name="Model_Id_Threec1" aria-label="Default select example" id="select1" onChange="enable2()">
							<option selected="">Select Model</option>	
							@foreach($ThreeWheelerCargo as $item)
							<option value="{{$item->id}}">{{$item->Model_Name}}-{{$item->Model_Description}}</option>	
							@endforeach								
						</select>
					 
					</div>
				</div>
			</aside>
			
			<aside class="col-sm-4">
				<div class="add-vehicle">
					<div class="add-vehicle-in">
						<section class="choose-img">								
							<figure class="filename" for="file-input"><img id="imager2" src="{{url('WebsiteImages/comarison_plus_logo.jpeg')}}" class="img-fluid"></figure>
							<!-- <input name="file" type="file"> -->
						</section>
						<p>Add Vehicle</p>

						<select class="form-select" name="Model_Id_Threec2" aria-label="Default select example" id="select2" disabled="true" onChange="enable3()">
							<option selected="">Select Model</option>	
							@foreach($ThreeWheelerCargo as $item)		
							<option value="{{$item->id}}">{{$item->Model_Name}}-{{$item->Model_Description}}</option>	
							@endforeach								
						</select>

					</div>
				</div>
			</aside>
			<aside class="col-sm-4">
				<div class="add-vehicle">
					<div class="add-vehicle-in">
						<section class="choose-img">								
							<figure class="filename" for="file-input"><img id="imager3" src="{{url('WebsiteImages/comarison_plus_logo.jpeg')}}" class="img-fluid"></figure>
							<!-- <input name="file" type="file"> -->
						</section>
						<p>Add Vehicle</p>

						<select class="form-select" name="Model_Id_Threec3" aria-label="Default select example"  id="select3" disabled="true" onChange="enable4()">
							<option selected="">Select Model</option>	
							@foreach($ThreeWheelerCargo as $item)
							<option value="{{$item->id}}">{{$item->Model_Name}}-{{$item->Model_Description}}</option>	
							@endforeach								
						</select>

					</div>
				</div>
			</aside>

			<div class="btn-wrap text-center">				
			<button class="btn-pry" onclick="comparefunction()" >Compare</button>
			</div>
			</section>
			</section>			
				</div>			
		</section><!--./wheeler-->
		
</div>

				@include('DekhoevWebsite/footer')
			
	 </section> 
	 <section>
	     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	    <script type="text/javascript" src="../js/bootstrap1.min.js"></script>
    	<script type="text/javascript" src="../js/common.js"></script>
    	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    	<script type="text/javascript" src="../js/slick.min.js"></script>
	 </section>


	 <script>
					function comparefunction() {
			var select1 = $("#select1 option:selected").text();
			var select2 = $("#select2 option:selected").text();
			var select3 = $("#select3 option:selected").text();

			var select1 = select1.replace(/ /g,"_");
			var select2 = select2.replace(/ /g,"_");
			var select3 = select3.replace(/ /g,"_");


			 window.location.href = 'https://dekhoev.com/compare-three-wheeler-cargo/'+select1+'-VS-'+select2+'-VS-'+select3;

	}

		function enable2()
		{
		    if(document.getElementById("select1").value!=""){
		        document.getElementById("select2").disabled=false;
				var imgr = document.getElementById('select1').value;
		         $.ajax({
                    url: '/Ajax3wc',
                    type: 'GET',
                    data: {imgr:imgr},
					success: function(data) {
						if(data == ""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/3WC.png"+data;							
	                      $("#imager1").attr("src",datas);
						}
	                    if(data !=""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/"+data;
	                      $("#imager1").attr("src",datas);
						}

	                    
	                },
	                error: function(XMLHttpRequest, textStatus, errorThrown) {
                        }               //case error                    }
        });

			    }

		    else{ 
		    document.getElementById("select2").disabled=true;
}
		}
	</script>
	<script>
		function enable3()
		{
		    if(document.getElementById("select2").value!=""){
		        document.getElementById("select3").disabled=false;
		        var imgr = document.getElementById('select2').value;
		         $.ajax({
                    url: '/Ajax3wc1',
                    type: 'GET',
                    data: {imgr:imgr},

					success: function(data) {
						if(data == ""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/3WC.png"+data;							
	                      $("#imager2").attr("src",datas);
						}
	                    if(data !=""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/"+data;
	                      $("#imager2").attr("src",datas);
						}

	                    
	                },
	                error: function(XMLHttpRequest, textStatus, errorThrown) {
                        }               //case error                    }
        });
		    }
		    else
		    document.getElementById("select3").disabled=true;

		}
	</script>
	<script>
		function enable4()
		{
		    
		        var imgr = document.getElementById('select3').value;
				var imgr1 = document.getElementById('select1').value;
		        if(imgr == imgr1){
		            
		        }
				else{
					$.ajax({
                    url: '/Ajax3wc2',
                    type: 'GET',
                    data: {imgr:imgr},
					success: function(data) {
						if(data == ""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/3WC.png"+data;							
	                      $("#imager3").attr("src",datas);
						}
	                    if(data !=""){
							var datas = "/UploadImages/NewModel/Threewheelercargofeature/"+data;
	                      $("#imager3").attr("src",datas);
						}

	                    
	                },
	                error: function(XMLHttpRequest, textStatus, errorThrown) {
                        }               //case error                    }
        });
		    
				}
		  
		}
		  
	</script>


	<script>
		$('#select1').change(function() {        
		    value1 = this.value;
		    $("#select2 option[value!='" + value1 + "']").show();
		    $("#select2 option[value='" + value1 + "']").hide();
		    $("#select3 option[value!='" + value1 + "']").show();
		    $("#select3 option[value='" + value1 + "']").hide();                                               
		});

		$('#select2').change(function() {        
		    value2 = this.value;
		    $("#select1 option[value!='" + value2 + "']").show();
		    $("#select1 option[value='" + value2 + "']").hide();
		    $("#select3 option[value!='" + value2 + "']").show();
		    $("#select3 option[value='" + value2 + "']").hide();                                               
		});


		$('#select3').change(function() {        
		    value3 = this.value;
		    if(value1 == value3)
		    {   
		    	alert('You have already selected this variant. Please choose a different variant for comparison.');
		    	$("#select3")[0].selectedIndex = 0;
		    }
		    else
		    {
		    	$("#select1 option[value!='" + value3 + "']").show();
			    $("#select1 option[value='" + value3 + "']").hide();
			    $("#select2 option[value!='" + value3 + "']").show();
			    $("#select2 option[value='" + value3 + "']").hide();
		    }
		                                                   
		});
	</script>

	</script>
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



});
</script>
 </body>
</html>