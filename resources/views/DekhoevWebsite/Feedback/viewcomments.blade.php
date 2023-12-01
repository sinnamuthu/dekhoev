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
  <link rel="stylesheet" type="text/css" href="../css/slick.css" />>
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
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
		<section class="feedback_form">
		    <div class="container" style="padding:20px; border-radius:5px; background-color: #f2f2f2;">
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
		            <center>
		                <div style="display:flex; float:left" class="text-center">
    		                 <h2>{{$Feedback->Model_Name}}</h2>
		                </div>
		            </center>
		            <input type="hidden" name="Products" id="cate" value="{{$Feedback->Products}}">
                    <!--<label for="name">Name</label>-->
                    <input type="text" id="fname" name="Name" placeholder="Your name.." required value="{{$Feedback->Name}}" readonly>

                    <label for="MobileNumber">Mobile Number</label>
                    <input type="number" id="number" name="Mobile_Number" placeholder="Your Number.." required value="{{$Feedback->Mobile_Number}}" readonly>
                    
                    <label for="Email">Email</label>
                    <input type="email" id="email" name="Email" placeholder="Your Email.." required value="{{$Feedback->Email}}" readonly>
                    
                    <label for="Email">Subject</label>
                    <input type="text" id="Subject" name="Subject" placeholder="Your Email.." required value="{{$Feedback->Subject}}">
                    
                    <label for="comments">Feedback Comments</label>
                    <input type="text" id="comments" name="Feedbackcomments" value="{{$Feedback->Feedbackcomments}}" required readonly>
                
                    <!--<center>-->
                    <!--    <form  method="GET" action="{{URL::to('/Website/Feedback/delete')}}/{{$Feedback->id}}" accept-charset="UTF-8" style="display:inline">-->
                    <!--         {{ method_field('DELETE') }}-->
                    <!--         {{ csrf_field() }} -->
                    <!--        <button type="submit" class="btn btn-danger btn-sm" title="Delete Feature" onclick="return confirm(&quot;Confirm delete feedback?&quot;)"> Delete</button>-->
                    <!--    </form>-->
                    <!--</center>-->
		    </div>
 
		</section>
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
