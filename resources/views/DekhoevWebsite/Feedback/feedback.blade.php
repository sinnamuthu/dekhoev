<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title> DekhoEv/Product-Details </title>
  <link rel="icon" type="image/x-icon" href="/icon.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}
        
        input[type=text],input[type=email], input[type=number], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }
        
        input[type=submit] {
          background-color: #04AA6D;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        </style>
 </head>
 <body>
	 <section class="wrapper">
		 
			 @include('DekhoevWebsite/header')
		
		<section class="feedback_form section-wrap-btm">
		    <div class="container" style="padding:20px; border-radius:5px; background-color: #f2f2f2;">
		            <form action="{{URL::to('/Feedback/save/')}}" method="POST"  onSubmit="alert('Thank you for your feedback.');">
                    {!! csrf_field() !!}
		            @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Sorry!</strong> Here have some issue please check<br><br>
                            <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                        </div>
                    @endif
    		        @if(session('success'))
                        <div class="alert alert-success">
                          {{ session('success') }}
                        </div> 
                    @endif
		            @if(Session::get('Model_Name'))
		            <center>
		                <div style="display:flex; float:left" class="text-center">
    		                 <input type="hidden" name="Model_Name" value="{{Session()->get('Model_Name')}}">    		                 
		                </div>
		            </center>
		            @endif
                @if(Session::get('Model_Description'))
		            <center>
		                <div style="display:flex; float:left" class="text-center">
    		                 <input type="hidden" name="Model_Description"  value="{{Session()->get('Model_Description')}}">    		                 
		                </div>
		            </center>
		            @endif
                <h2>{{Session()->get('Model_Name')}} - {{Session()->get('Model_Description')}}</h2>
		            @if(Session::get('Products'))
		            <input type="hidden" name="Products" id="cate" value="{{Session()->get('Products')}}">
		            @endif
                    <!--<label for="name">Name</label>-->
                    <input type="text" id="fname" name="Name" placeholder="Your name.." required>
                    
                    <label for="MobileNumber">Mobile Number</label>
                    <input type="number" id="number" name="Mobile_Number" placeholder="Your Number.." required>
                
                    <label for="Email">Email</label>
                    <input type="email" id="email" name="Email" placeholder="Your Email.." required>
                    
                    <label for="Email">Subject</label>
                    <input type="text" id="Subject" name="Subject" placeholder="Your Subject.." required>
                    
                    <label for="comments">Feedback Comments</label>
                    <textarea id="comments" name="Feedbackcomments" placeholder="Write Feedback.." style="height:200px"  maxlength="300" required></textarea>
                
                    <center><input type="submit" calss="text-center" value="Submit"></center>
                    </form>
                    
		    </div>
 
		</section>

			
				@include('DekhoevWebsite/footer')
			
	 </section>  
	 <section>
	     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	    <script type="text/javascript" src="../js/bootstrap1.min.js"></script>
    	<script type="text/javascript" src="../js/common.js"></script>
    	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    	<script type="text/javascript" src="../js/slick.min.js"></script>
	 </section>
 </body>
</html>
