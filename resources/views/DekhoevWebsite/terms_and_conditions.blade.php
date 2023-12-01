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
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<script src='../js/jquery-3.6.0.min.js'></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/slick.min.js"></script>
	<script src="../js/common.js"></script>
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />
 </head>
 <body>
	 <section class="wrapper">
			@include('DekhoevWebsite/header')
		<section class="main-cnt">			
			<section class="hm-gyaan dt">
				<section class="section-wrap">
					<section class="container">
						<section class="row">
							<aside class="col-md-12">
								<div class="hm-gyaan-bx gyaan dt">									
									<h2 class="text-center">Terms &amp; Conditions</h2>
									<p>The below details are the Terms and privacy policy of DekhoEV, the website www.dekhoev.com, and the users who interact with it. DekhoEV is committed to protecting the privacy of its users and complies with all the relevant regulations around the same.</p>
									<h3 style="marginal-top:20px">Content</h3>
									<ol>
										<li>DekhoEV is an information aggregator website. We attempt to search many brands in the market.</li>
										<li>We collect information from publically accessible sites and aggregate them at www.dekhoev.com</li>
										<li>DekhoEV does not take responsibility for the correctness of the information.</li>
										<li>DekhoEV provides preliminary information of all electric 2 Wheeler, Cars, SUVs, 3 Wheeeler Cargo and 3 Wheeler Passenger Vehicles</li>
										<li>If you find any descrepancy on DekhoEV related to ny Model/Price/Feature discrepancy for Cars, 2 Wheeler, 3 Wheeler Passenger, 3 Wheeler Cargo Vehicles, you may please bring the same to our attention through the Feedback form and alternatively</li>
									</ol>
									<h3 style="marginal-top:20px">Data Sources and Uses</h3>
									<ol>
										<li>We do not collect payment card numbers and pins and to analyse sources of traffic</li>
										<li>Internet and network activity like IP addresses and location We collect this data automatically when you visit our website. This data is used to analyze location-based aggregate data and sources of traffic.</li>
										<li>We also use this data to provide goods or services and targeted promotions.</li>
									</ol>
									<h3 style="marginal-top:20px">Social</h3>
									<ol>
										<li>Social Media reviews We may choose to re-share customer reviews on Facebook, Instagram, and other social media.</li>
										<li>We use this data to measure user engagement and for security and fraud prevention.</li>
										<li>We obtain this data directly when users share our content, post with our products, or tag us.</li>
									</ol>
									<h3 style="marginal-top:20px">Data</h3>
									<ol>
										<li>Data sources We may use other sources to draw data to identify customers, customise and personalise advertisements, identify new customers, and for security and fraud prevention</li>
									</ol>
									<h3 style="marginal-top:20px">Security</h3>
									<ol>
										<li>Data Sharing DekhoEV does not share user data with third parties in exchange for money.</li>
										<li>We may transfer personal data to third parties in order to obtain their services (for example, for Facebook and Google Ads).</li>
										<li>We are always careful with user data and we intend to comply with all regional legislation.</li>
									</ol>
									<h3 style="marginal-top:20px">Email &amp; Communication Opt Out</h3>
									<ol>
										<li>Customer Notifications DekhoEV gives the option to users to opt-out of email marketing and marketing on other media.</li>
										<li>You can email us at (Email ID Need to Be Input Here) if you are receiving communication that you do not wish to subscribe.</li>
									</ol>
									<h3 style="marginal-top:20px">Use of Cookies</h3>
									<ol>
										<li>DekhoEV uses cookies to improve user experience and to increase website load speeds.</li>
										<li>Users are advised to check their web browser settings if they do not want to share cookies.</li>
										<li>Some of the user tracking's are done by Google and Facebook. You can refer to Google and Facebook's privacy policy for reference.</li>
									</ol>
									<h3 style="marginal-top:20px">External Links</h3>
									<ol>
										<li>Although DekhoEV only includes verified links on the website, DekhoEV does not take guarantee for the quality of the links.</li>
										<li>Users are advised to exercise caution while clicking on any links. DekhoEV cannot be held liable for any damage caused due to external links.</li>
									</ol>
								</div>						
							</aside>
						</section>
					</section>
				</section>
			</section>
			</section>
				@include('DekhoevWebsite/footer')
	 </section>  
     <a href="javascript:" id="return-to-top"><img src="{{ url('http://dekhoev.com/WebsiteImages/up-arrow.png') }}"></a>
 </body>
</html>
