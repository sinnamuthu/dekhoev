<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Write A Review Modals</title>
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
		 <header>
			 <div class="container">
					<nav class="navbar navbar-expand-lg navbar-light">
					 <div class="container-fluid">
						 <a class="navbar-brand" href="index.html"><img src="/logo.png" alt="DGV"></a>
					  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon"></span>
						</button>
					  <div class="collapse navbar-collapse" id="main_nav">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item active"> <a class="nav-link" href="#">Gyaan</a> </li>
							<li class="nav-item"><a class="nav-link" href="#">Cars</a></li>
							<li class="nav-item"><a class="nav-link" href="#">2 Wheelers</a></li>
							<li class="nav-item"><a class="nav-link" href="#">3 Wheelers</a></li>
							<li class="nav-item"><a class="nav-link" href="comparison.html">Comparison</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Who are You?</a></li>
							<li class="nav-item"><a class="nav-link" href="#">About us</a></li>
						</ul>
					  </div> <!-- navbar-collapse.// -->
					 </div> <!-- container-fluid.// -->
					</nav>
			 </div>
		</header>
		<section class="main-cnt">
				<div class="container">
				<section class="write-a-review"><!--Write A Review-->
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label" for="flexCheckDefault">
						Do you own same/similar product from this brand?
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
						<label class="form-check-label" for="flexCheckChecked">
						Are you an auto blogger who has driven this product?
						</label>
					</div>
				</section><!--./Write A Review-->

				<section class="would-u-like"><!--Would you like-->
					<p>would you like to review ?</p>
					<div class="btn-wrap"> 
						<a class="btn-pry" href="javascript:;">Yes</a>
						<a class="btn-sec" href="javascript:;">No</a>
					</div>
				</section><!--./Would you like-->

				<section class="three-option"><!--three option-->
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
					  <label class="form-check-label" for="flexRadioDefault1">
						are you owner?
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
					  <label class="form-check-label" for="flexRadioDefault2">
						Blogger?
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
					  <label class="form-check-label" for="flexRadioDefault3">
						EV Auto OEM
					  </label>
					</div>
					<div class="btn-wrap"><a class="btn-pry" href="javascript:;">Next</a></div>
				</section><!--./three option-->

				<section class="owner-signin-form"><!--Owner Form-->
					<h2>EV Owner</h2>
					<p class="st">For Ola s1</p>
						<form>
							<div class="form-wrap">
								<input type="text" placeholder="Name" class="form-control" />
							</div>
							<div class="form-wrap">
								<input type="text" placeholder="Email" class="form-control" />
							</div>
							<div class="form-wrap">
								<input type="tel" placeholder="Mobile No" class="form-control" />
							</div>
							<div class="form-wrap">
								<label>Are you willing to answer Other people's Queries</label><br>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								  <label class="form-check-label" for="inlineRadio1">Yes</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								  <label class="form-check-label" for="inlineRadio2">No</label>
								</div>
							</div>
						<div class="form-wrap">
							<div class="star-wrap"><label>Pickup</label><a class="star-blk"><i class="a-ic ic-star star-4-5"></i></a></div>
							<div class="star-wrap"><label>Ease of Driving</label><a class="star-blk"><i class="a-ic ic-star star-3"></i></a></div>
							<div class="star-wrap"><label>Range</label><a class="star-blk"><i class="a-ic ic-star star-1-5"></i></a></div>
							<div class="star-wrap"><label>Time to Charge</label><a class="star-blk"><i class="a-ic ic-star star-0-5"></i></a></div>
							<div class="star-wrap"><label>Price Value for Money</label><a class="star-blk"><i class="a-ic ic-star star-2-5"></i></a></div>
						</div>
						<div class="form-wrap">
							<textarea class="form-control" id="" rows="3"  placeholder="Message"></textarea>
						</div>
						<div class="form-wrap">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">
								Want to convey your Review to Manufacturer?
								</label>
							</div>
						</div>
						<div class="form-wrap">
							<label>Vehicle Registration No :</label>&nbsp;<span><input type="text" placeholder="Enter Vehicle number" class="form-control" /></span>
						</div>
							<div class="btn-wrap text-center">
								<a class="btn-pry" href="javascript:;">Submit</a>
							</div>
						</form>
				</section><!--./Owner Form-->

				<section class="blogger"><!--Blogger-->
					<p>Blogger</p>
					<div class="btn-wrap"> 
						<a class="btn-pry" href="javascript:;">Sign up</a>
						<a class="btn-sec" href="javascript:;">Login</a>
					</div>
				</section><!--./Blogger-->

				<section class="auto-blogger-form"><!--Auto Blogger-->
					<h2>Auto Blogger</h2>
						<form>
							<div class="form-wrap">
								<input type="text" placeholder="Name" class="form-control" />
							</div>
							<div class="form-wrap">
								<input type="text" placeholder="Email" class="form-control" />
							</div>
							<div class="form-wrap">
								<input type="tel" placeholder="Mobile No" class="form-control" />
							</div>
							<div class="form-wrap">
								<input type="password" placeholder="Create Password" class="form-control" />
							</div>
							<div class="form-wrap">
								<label>Are you willing to answer Other people's Queries</label><br>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								  <label class="form-check-label" for="inlineRadio1">Yes</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								  <label class="form-check-label" for="inlineRadio2">No</label>
								</div>
							</div>
							<div class="btn-wrap text-center">
								<a class="btn-pry" href="javascript:;">Create</a>
							</div>
						</form>
				</section><!--./Auto Blogger-->

				<section class="owner-signin-form"><!--Auto Blogger Next-->			
					<p class="st">For Ola s1</p>
						<form>
							<div class="form-wrap">
								<label>Are you willing to answer Other people's Queries</label><br>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								  <label class="form-check-label" for="inlineRadio1">Yes</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								  <label class="form-check-label" for="inlineRadio2">No</label>
								</div>
							</div>
						<div class="form-wrap">
							<div class="star-wrap"><label>Pickup</label><a class="star-blk"><i class="a-ic ic-star star-4-5"></i></a></div>
							<div class="star-wrap"><label>Ease of Driving</label><a class="star-blk"><i class="a-ic ic-star star-3"></i></a></div>
							<div class="star-wrap"><label>Range</label><a class="star-blk"><i class="a-ic ic-star star-1-5"></i></a></div>
							<div class="star-wrap"><label>Time to Charge</label><a class="star-blk"><i class="a-ic ic-star star-0-5"></i></a></div>
							<div class="star-wrap"><label>Price Value for Money</label><a class="star-blk"><i class="a-ic ic-star star-2-5"></i></a></div>
						</div>
						<div class="form-wrap">
							<textarea class="form-control" id="" rows="3"  placeholder="Message"></textarea>
						</div>
							<div class="btn-wrap text-center">
								<a class="btn-pry" href="javascript:;">Submit</a>
							</div>
						</form>
				</section><!--./Auto Blogger Next-->

				<section class="login-form"><!--Login-->
					<h2>Log in</h2>
						<form>
							<div class="form-wrap">
								<input type="tel" placeholder="Mobile Number/Email ID" class="form-control" />
							</div>
							<div class="form-wrap">
								<input type="password" placeholder="Password" class="form-control" />
								<small>Forgot Password</small>
							</div>
							<div class="btn-wrap text-center">
								<a class="btn-pry" href="javascript:;">Login</a>
							</div>
						</form>
				</section><!--./Login-->

				<section class="blogger"><!--EV Auto-->
					<p>EV Auto OEM</p>
					<div class="btn-wrap"> 
						<a class="btn-pry" href="javascript:;">Sign up</a>
						<a class="btn-sec" href="javascript:;">Login</a>
					</div>
				</section><!--./EV Auto-->

				<section class="auto-blogger-form"><!--EV Auto OEM-->
					<h2>EV Auto OEM</h2>
						<form>
							<div class="form-wrap">
								<input type="text" placeholder="Name" class="form-control" />
							</div>
							<div class="form-wrap">
								<input type="text" placeholder="Email" class="form-control" />
							</div>
							<div class="form-wrap">
								<input type="tel" placeholder="Mobile No" class="form-control" />
							</div>
							<div class="form-wrap">
								<input type="password" placeholder="Create Password" class="form-control" />
							</div>
							<div class="form-wrap">
								<label>Are you willing to answer Other people's Queries</label><br>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								  <label class="form-check-label" for="inlineRadio1">Yes</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								  <label class="form-check-label" for="inlineRadio2">No</label>
								</div>
							</div>
							<div class="btn-wrap text-center">
								<a class="btn-pry" href="javascript:;">Create</a>
							</div>
						</form>
				</section><!--./EV Auto OEM-->

				<section class="owner-signin-form"><!--EV Auto OEM Next-->
					<h2>EV Auto OEM</h2>
					<p class="st">For Ola s1</p>
						<form>
							<div class="form-wrap">
								<label>Are you willing to answer Other people's Queries</label><br>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								  <label class="form-check-label" for="inlineRadio1">Yes</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								  <label class="form-check-label" for="inlineRadio2">No</label>
								</div>
							</div>
						<div class="form-wrap">
							<div class="star-wrap"><label>Pickup</label><a class="star-blk"><i class="a-ic ic-star star-4-5"></i></a></div>
							<div class="star-wrap"><label>Ease of Driving</label><a class="star-blk"><i class="a-ic ic-star star-3"></i></a></div>
							<div class="star-wrap"><label>Range</label><a class="star-blk"><i class="a-ic ic-star star-1-5"></i></a></div>
							<div class="star-wrap"><label>Time to Charge</label><a class="star-blk"><i class="a-ic ic-star star-0-5"></i></a></div>
							<div class="star-wrap"><label>Price Value for Money</label><a class="star-blk"><i class="a-ic ic-star star-2-5"></i></a></div>
						</div>
						<div class="form-wrap">
							<textarea class="form-control" id="" rows="3"  placeholder="Message"></textarea>
						</div>
							<div class="btn-wrap text-center">
								<a class="btn-pry" href="javascript:;">Submit</a>
							</div>
						</form>
				</section><!--./EV Auto OEM Next-->
				</div>			
		</section>
			<footer class="section-wrap">
				<section class="container">
					<div class="row">
						<aside class="col-sm-3"><figure class="ftr-logo"><img src="/logo.png" alt=""></figure></aside>	
						<aside class="col-sm-6">
							<h3>Quick Link</h3>
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="javascript:;">EVCars</a></li>
								<li><a href="javascript:;">EVBikes</a></li>
								<li><a href="javascript:;">EvNews</a></li>
								<li><a href="javascript:;">About US</a></li>
								<li><a href="javascript:;">FAQ</a></li>
							</ul>						
						</aside>	
						<aside class="col-sm-3">
							<h3>Follow us</h3>
							<ul class="social">
								<li class="twitter"><a href="javascript:;">Twitter</a></li>
								<li class="linkedin"><a href="javascript:;">Linked in</a></li>
								<li class="fb"><a href="javascript:;">Facebook</a></li>
							</ul>
						</aside>
					</div>
				</section>
			</footer>
			</div>
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