<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
	<title>DekhoEV / Comparision</title>
	<link rel="icon" type="image/x-icon" href="/icon.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
 </head>
 <body>
	 <section class="wrapper">
			 @include('DekhoevWebsite/header')
			@include('DekhoevWebsite/footer')

<!-- Three Wheeler cargo Modal -->
<div class="modal fade" id="myModalthreec" data-bs-backdrop="static">
	<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			<form action="/Comparisions-Table-Two-Wheeler" method="post">
			    {!! csrf_field() !!}
			    <section class="row">
        			<aside class="col-sm-4">
        				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal2threec1">
        				    @foreach($currentmodelthreec1 as $item)
        					<div class="add-vehicle-in">
        					    <div id="add_vehicle" style="display:none">
        					        <figure><img src="{{ url('/icon-add.png')}}"></figure>
        						    <p>Add Vehicle</p>
        					    </div>
        						<figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
        						<input type="hidden" name="Model_Name_Threec1" value="{{$item->Model_Name}}">
        					</div>
        					@endforeach
        				</div>
        			</aside>
        			<aside class="col-sm-4">
        				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal2threec2">
        					@foreach($currentmodelthreec2 as $item)
        					<div class="add-vehicle-in">
        					    <div id="add_vehicle" style="display:none">
        					        <figure><img src="{{ url('/icon-add.png')}}"></figure>
        						    <p>Add Vehicle</p>
        					    </div>
        						<figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
        						<input type="hidden" name="Model_Name_Threec2" value="{{$item->Model_Name}}">
        					</div>
        					@endforeach
        				</div>
        			</aside>
        			<aside class="col-sm-4">
        				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal2threec3">
        					@foreach($currentmodelthreec3 as $item)
        					<div class="add-vehicle-in">
        					    <div id="add_vehicle" style="display:none">
        					        <figure><img src="{{ url('/icon-add.png')}}"></figure>
        						    <p>Add Vehicle</p>
        					    </div>
        						<figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
        						<input type="hidden" name="Model_Name_Threec3" id = 'emp3' value="{{$item->Model_Name}}">
        					</div>
        					@endforeach
        				</div>
        			</aside>
        			<div class="btn-wrap text-center mt-5">
        			    <input type="submit" class="btn-pry" value="compare">
        			</div>
			</section>
			</form>
        </div>
      </div>
    </div>
</div>

<!--Three Wheeler Cargo Modal-->

<!--Three Wheeler Cargo Add Product Modal 1-->
<div class="modal fade" id="myModal2threec1" data-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">                        
            <h3>Add Product to Comparison</h3><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  
				@foreach($user2 as $item)
				<div class="search-wrap">
				    <form action="" method="get">
				        <section class="row">
						<aside class="item-img col-sm-3"><figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item->Modelimage)}}" id="text1"></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							    <input type="hidden" name="Threec" id="Threec" value={{$item->Model_Name}}>
    							<p>{{$item->Model_Name}}</p>
    							<p class="grn">{{$item->Price_Ex_Showroom}}</p>	
   							</div>					
						</aside>
						<input type="hidden" name="current_model1" value="{{$item->Model_Name}}">
						<input type="hidden" name="current_image1" value="{{$item->Modelimage}}">
						<button class="btn btn-primary">Select</button>
					    <hr class="hr">
				    </form>
				</div>
				@endforeach
            </div>
        </div>
    </div>
</div>
<!--Three Wheeler Cargo Add Product Modal 1-->


<!--Three Wheeler Cargo Add Product Modal 2-->
<div class="modal fade" id="myModal2threec2" data-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">                        
            <h3>Add Product to Comparison</h3><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			 <!--<div class="search">-->
				<!--  <i class="fa fa-search"></i>-->
				<!--  <input type="text" class="form-control" id="search_product2" placeholder="Search">-->
				<!--  <button class="btn btn-primary">Search</button>-->
				<!--</div>-->
				@foreach($user2 as $item)
				<div class="search-wrap">
				    <form action="" method="get">
				        <section class="row">
						<aside class="item-img col-sm-3"><figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item->Modelimage)}}" id="text1"></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							    <input type="hidden" name="Threec" id="Threec" value={{$item->Model_Name}}>
    							<p>{{$item->Model_Name}}</p>
    							<p class="grn">{{$item->Price_Ex_Showroom}}</p>	
							</div>					
						</aside>
						<input type="hidden" name="current_model2" value="{{$item->Model_Name}}">
						<input type="hidden" name="current_image2" value="{{$item->Modelimage}}">
						<button class="btn btn-primary">Select</button>
					    <hr class="hr">
				    </form>
				</div>
				@endforeach
            </div>
        </div>
    </div>
</div>
<!--Three Wheeler Cargo Add Product Modal 2-->


<!--Three Wheeler Cargo Add Product Modal 3-->
<div class="modal fade" id="myModal2threec3" data-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">                        
            <h3>Add Product to Comparison</h3><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			 <!--<div class="search">-->
				<!--  <i class="fa fa-search"></i>-->
				<!--  <input type="text" class="form-control" id="search_product3" placeholder="Search">-->
				<!--  <button class="btn btn-primary">Search</button>-->
				<!--</div>-->
				@foreach($user2 as $item)
				<div class="search-wrap">
				    <form action="" method="get">
				        <section class="row">
						<aside class="item-img col-sm-3"><figure><img src="{{url('/UploadImages/NewModel/Twowheelerspecsfeature/'. $item->Modelimage)}}" id="text1"></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							    <input type="hidden" name="Threec" id="Threec" value={{$item->Model_Name}}>
    							<p>{{$item->Model_Name}}</p>
    							<p class="grn">{{$item->Price_Ex_Showroom}}</p>	
							</div>					
						</aside>
						<input type="hidden" name="current_model3" value="{{$item->Model_Name}}">
						<input type="hidden" name="current_image3" value="{{$item->Modelimage}}">
						<button class="btn btn-primary">Select</button>
					    <hr class="hr">
				    </form>
				</div>
				@endforeach
            </div>
        </div>
    </div>
</div>
<!--Three Wheeler Cargo Add Product Modal 3-->


	 </section>  
	 
	 <!--//session category-->
	 
	 <input type='hidden' id='popup_cate' value = {{Session()->get('product')}}>
	 
	 <!--session category-->
	 
	 <section class="script">
	     <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	     <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
	     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	    <script type="text/javascript" src="../js/bootstrap1.min.js"></script>
    	<script type="text/javascript" src="../js/common.js"></script>
    	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    	<script type="text/javascript" src="../js/slick.min.js"></script>
    	<script>
      </script>
          	  <script>
              $( function() {
                var availableTags = [
                  "ActionScript",
                  "AppleScript",
                  "Asp",
                  "BASIC",
                ];
                $( "#search_product1" ).autocomplete({
                  source: availableTags
                });
              } );
              </script>
              
            <script>
                $(document).ready(function(){
                    $("#myModalthreec").modal('show');
                });
            </script>

<script type="text/javascript">
	function sess(){


		document.getElementById("emp3").value="";
	}

</script>




	 </section>
 </body>
</html>