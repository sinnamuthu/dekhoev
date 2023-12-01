<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title> DekhoEv/Product-Details </title>
  <link rel="icon" type="image/x-icon" href="/icon.png">
	<link rel="stylesheet" type="text/css" href="/../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="/../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="/../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="/../css/dgv-responsive.css" />
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
 </head>
 <body>
	 <section class="wrapper">
		 
			 @include('DekhoevWebsite/header')
		
<form action="{{URL::to('/Review/Rating_store')}}" method="POST" onSubmit="alert('Thank you for your feedback.');">
 {!! csrf_field() !!}
<div class="modal fade" id="exampleModalToggle" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <section class="owner-signin-form"><!--EV Auto OEM Next-->
           @if(Session::get('Model_Name'))
    			<h2 class="st">{{Session()->get('Model_Name')}}</h2>
    			<input type="hidden" name="Model_Name" id="cate" value="{{Session()->get('Model_Name')}}">
    		@endif	
			@if(Session::get('Products'))
		       <input type="hidden" name="Products" id="cate" value="{{Session()->get('Products')}}">
		    @endif
                 @if(Session::get('Model_Brand'))
		       <input type="hidden" name="Model_Brand" id="cate" value="{{Session()->get('Model_Brand')}}">
		    @endif

                 @if(Session::get('User_Types'))
		       <input type="hidden" name="User_Types" id="cate" value="{{Session()->get('User_Types')}}">
		    @endif

					<div class="form-wrap">
						<label>Are you willing to answer Other people's Queries</label><br>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="Are_you_willing_to_answer_Other_People_Queries" id="inlineRadio1" >
						  <label class="form-check-label" for="inlineRadio1">Yes</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="Are_you_willing_to_answer_Other_People_Queries" id="inlineRadio2" >
						  <label class="form-check-label" for="inlineRadio2">No</label>
						</div>
					</div>
						<div class="form-wrap my-3">
                        <div class="form-wrap my-3" >
                                          <p> <b> Rating selection: select from 1 to 5 as rating. 1 - Poor  and  5 - Excellent</b></p>              
                                    </div>
						    <table>
						        <tr>
						            <td><label><b>Pickup</b></label></td>
						            <td>
						            	<select name="Pickup" id="Pickup" required>
						            	  <option value="">Given Ratings</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										</select>
									</td>
						            <!-- <td><input type="text" name="Pickup" maxlength="1" required></td> -->
						        </tr>
						        <tr>
						            <td><label><b>Ease of Driving</b></label></td>
						            <td>
						            	<select name="Ease_of_driving" id="Ease_of_driving" required>
						            	  <option value="">Given Ratings</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										</select>
									</td>
						            <!-- <td><input type="text" name="Ease_of_driving" maxlength="1" required></td> -->
						        </tr>
    							<tr>
    							    <td><label><b>Range</b></label></td>
    							    <td>
						            	<select name="Ranges" id="Ranges" required>
						            	  <option value="">Given Ratings</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										</select>
									</td>
    							    <!-- <td><input type="text" name="Range" maxlength="1" required></td> -->
    							</tr>
    							<tr>
    							    <td><label><b>Time to Charge</b></label></td>
    							    <td>
						            	<select name="Time_to_Change" id="Time_to_Change" required>
						            	  <option value="">Given Ratings</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										</select>
									</td>
    							    <!-- <td><input type="text" name="Time_to_Change" maxlength="1" required></td> -->
    							</tr>
    							<tr>
    							    <td><label><b>Price Value for Money</b></label></td>
    							    <td>
						            	<select name="Price_value_for_money" id="Price_value_for_money" required>
						            	  <option value="">Given Ratings</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										</select>
									</td>
    							    <!-- <td><input type="text" name="Price_value_for_money" maxlength="1" required></td> -->
    							</tr>
						    </table>
						</div>
				<div class="form-wrap">
					<textarea class="form-control" id="Message" name="Message" rows="3"  placeholder="Message" required></textarea>
				</div>
					<div class="btn-wrap text-center">
						<center><button class="btn-pry" type="submit" value="save">Submit</button></center>
					</div>
				</form>
		</section><!--./EV Auto OEM Next-->
      </div>
    </div>
  </div>
</div>
</form>		
<!--review popup section 4-->


			
				@include('DekhoevWebsite/footer')
			
	 </section>  

	 <section>
	    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="/../js/bootstrap1.min.js"></script>
		<script type="text/javascript" src="/../js/common.js"></script>
		<script type="text/javascript" src="/../js/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="/../js/slick.min.js"></script>
    	
    	<script>
                $(document).ready(function(){
                    $("#exampleModalToggle").modal('show');
                });
            </script>
	 </section>
 </body>
</html>
