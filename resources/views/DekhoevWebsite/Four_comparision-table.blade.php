<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>DekhoEv/Comparision-Table</title>
  <link rel="icon" type="image/x-icon" href="/icon.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-style.css" />
	<link rel="stylesheet" type="text/css" href="../css/dgv-responsive.css" />
	<link rel="stylesheet" type="text/css" href="../css/slick.css" />
	<link rel="stylesheet" type="text/css" href="{{ url('../css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="google-site-verification" content="3uXwq5oPot5f1tkzAwwFg8ymwDrXHl51RUKA39pkCNk" />

	<style>

    .mobile_view{
      display: none;
    }


    @media only screen and (max-width: 600px) {
      .mobile_view{
      display: contents;
    }
    .mobile_hide{
      display:none;
    }
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
</style>
 </head>
 <body>
	 <section class="wrapper">
		 
			 @include('DekhoevWebsite/header')
		
		<section class="main-cnt">
	
@php
if(count($user2) == 0){
	

@endphp

@foreach($user as $item)
@foreach($user1 as $item1)

			<section class="comparision-table-tp">
				<div class="container">
					<section class="row">
						<div class="bread-comp"><p>{{$item->Model_Name}}  - {{$item->Model_Description}}  V/s {{$item1->Model_Name}} -  {{$item1->Model_Description}}<span>
              
              <?php	
                                              $gettitlemodelname = str_replace(" ","_",$item->Model_Name);
                        $gettitlemodeldesc = str_replace(" ","_",$item->Model_Description);

                        $gettitle1modelname = str_replace(" ","_",$item1->Model_Name);
                        $gettitle1modeldesc = str_replace(" ","_",$item1->Model_Description);
                                              ?>
                        <a href="#" class='postbutton productshare sharebutton' style='margin-top: 0px !important;'id="{{ url('compare-four-wheeler/'.$gettitlemodelname.'-'.$gettitlemodeldesc.'-VS-'.$gettitle1modelname.'-'.$gettitle1modeldesc.'-VS-Select_Model')}}" data="{{$item->Model_Name}}-{{$item->Model_Description}}"><img src="https://dekhoev.com/WebsiteImages/share.png" alt="sharebutton" style="width:30px;height:30px;"></a></span></div>
						<aside class="col-sm-3 compare-opt">
							<!-- <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							  <label class="form-check-label" for="flexCheckDefault">Hide common features</label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							  <label class="form-check-label" for="flexCheckChecked">Highlight differences</label>
							</div> -->					
						</aside>
						<aside class="col-sm-9 mobile_hide">
							<ul class="compare-list">
								<li>
									<div class="compare-list-bx">
										@if($item->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
										@endif
										<h4>{{$item->Model_Name}} -  {{$item->Model_Description}}</h4>
										<p> ₹.{{$item->Price_Ex_Showroom}} /-<span></span> </p>
									</div>
								</li>
								<li>
									<div class="compare-list-bx">
										@if($item1->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item1->Modelimage <>"")
										<figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item1->Modelimage)}}" class="img-fluid"></figure>
										@endif
										<h4>{{$item1->Model_Name}} -  {{$item1->Model_Description}}</h4> 
										<p>₹.{{$item1->Price_Ex_Showroom}} /-<span></span> </p>
									</div>
								</li>
								<li>
									
								</li>
							</ul>		
						</aside>
					</section>
				</div>
			</section>

			<section class="comparision-table-wrap">
				<div class="container">
					<section class="section-wrap"><!--wheeler-->
            <div id="table-scroll" class="table-scroll">
              <div class="table-wrap">
                <table class="main-table">
                  <thead>
                    <tr>
                      <th class="fixed-side wbg" scope="col">Overview</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                      <tr class='mobile_view'>
                      <td class="fixed-side "><span></span></td>
                @foreach ($user as $values)	
                              @foreach ($user1 as $values1)
                    <td><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $values->Modelimage)}}" class="img-fluid"></td>
                                <td><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $values1->Modelimage)}}" class="img-fluid"></td>
                @endforeach
                            @endforeach
                            </tr>
					<tr>
                    <td class="fixed-side"><span><img src="{{ url('/UploadImages/NewFeatureMaster/1670304906.3WC OEM.png' ) }}" ></span>OEM Brand</td>
							@foreach ($user as $values)	
                            @foreach ($user1 as $values1)
    						   <td>{{ $values->OEM_name }}</td>
                               <td>{{ $values1->OEM_name }}</td>
						   @endforeach
                           @endforeach
					<tr>
                  </thead>
                  <tbody>
                       @foreach ($user3 as $user)
                   <tr>
                   <!-- <th class="fixed-side">{{$user->Feature_Name}}  - 	 {{$user->Unit_of_Measurement}}</th> -->
				   @if($user->Featureimage == "")
								 			<!-- <input type="hidden" value=""> -->
								 			<td> {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
										@if($user->Featureimage <> "")
										<td class="fixed-side"> <span><img src="{{ url('/UploadImages/NewFeatureMaster/' . $user->Featureimage) }}" ></span>  {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
                   <!--test-->
                   
                   @php
                                     $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 $val = $user->Feature_Name;
                                                                                 $val = str_replace(" ","_",$val);
                                                                                 $val = str_replace("&","",$val);
                                                                                 $val = str_replace("/","",$val);
                                                                                 $val = str_replace("@","",$val);
                                                                                 $val = str_replace("-","_",$val);
																				 $val = str_replace("(","_",$val);
																				 $val = str_replace(")","_",$val);
																				 $val = str_replace("{","_",$val);
																				 $val = str_replace("}","_",$val);
																				 $val = str_replace(",","_",$val);
																				 $val = str_replace("!","_",$val);
																				 $val = str_replace("?","_",$val);
																				 $val = str_replace('!', '_', $val);
																				 $val = str_replace('*', '_', $val);
																				 $val = str_replace('<', '_', $val);
																				 $val = str_replace('>', '_', $val);
																				 $val = str_replace('#', '_', $val);
																				 $val = str_replace('~', '_', $val);
																				 $val = str_replace(":", "_", $val);
                                                                                 $val = str_replace(";", "_", $val);
                                                                                 $val = str_replace(",", "_", $val);
                                                                                 $val = str_replace("+", "_", $val);
                                                                                 $val = str_replace("$", "_", $val);
                                                                                 $val = str_replace("^", "_", $val);
                                                                                 $val = str_replace("`", "_", $val);
                                                                                 $Model_Id_Threec1 = session()->get('Model_Id_Threec1');
                                                                                 $Model_Id_Threec2 = session()->get('Model_Id_Threec2');
                                       
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        
                                        $model_id =$item->id;
                                        $model_id1=$item1->id;
                                         
                                        
                                            $sql = "SELECT * FROM fourwheelerspecsfeatures WHERE id='$Model_Id_Threec1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        //second comparision
                                        $sql1 = "SELECT * FROM fourwheelerspecsfeatures WHERE id='$Model_Id_Threec2'";
                                            $result1 = $conn->query($sql1);
                                            if ($result1->num_rows > 0) {
                                                while ($row1 = $result1->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        
                                        
                                       @endphp
                   
                   
                   <!--test-->
                   
                   @endforeach
                    </tr>
                  </tbody>
            	  <tfoot>
                    <tr>
                      <th class="fixed-side">&nbsp;</th>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
			</section><!--./wheeler-->
		    </div>	
		    @endforeach
		    @break
		    @endforeach
		    

@php
}

@endphp

@php
if(count($user1) == 0){
	


@endphp

@foreach($user as $item)
		    @foreach($user2 as $item2)

			<section class="comparision-table-tp">
				<div class="container">
					<section class="row">
						<div class="bread-comp"><p>{{$item->Model_Name}} -  {{$item->Model_Description}} V/s {{$item2->Model_Name}} -  {{$item2->Model_Description}}</div>
						<aside class="col-sm-3 compare-opt">
							<!-- <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							  <label class="form-check-label" for="flexCheckDefault">Hide common features</label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							  <label class="form-check-label" for="flexCheckChecked">Highlight differences</label>
							</div> -->					
						</aside>
						<aside class="col-sm-9">
							<ul class="compare-list">
								<li>
									<div class="compare-list-bx">
									@if($item->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
										@endif
										<h4>{{$item->Model_Name}} -  {{$item->Model_Description}}</h4>
										<p>₹.{{$item->Price_Ex_Showroom}} /-<span></span> </p>
									</div>
								</li>
								<li>
									<div class="compare-list-bx">
									@if($item2->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item2->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item2->Modelimage)}}" class="img-fluid"></figure>
										@endif
										<h4>{{$item2->Model_Name}}  - {{$item2->Model_Description}}</h4> 
										<p>₹.{{$item2->Price_Ex_Showroom}} /-<span></span></p>
									</div>
								</li>
								<li>
									
								</li>
							</ul>		
						</aside>
					</section>
				</div>
			</section>

			<section class="comparision-table-wrap">
				<div class="container">
					<section class="section-wrap"><!--wheeler-->
            <div id="table-scroll" class="table-scroll">
              <div class="table-wrap">
                <table class="main-table">
                  <thead>
                    <tr>
                      <th class="fixed-side wbg" scope="col">Overview</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
					<tr>
                    <td class="fixed-side"><span><img src="{{ url('/UploadImages/NewFeatureMaster/1670304906.3WC OEM.png' ) }}" ></span>OEM Brand </td>
							@foreach ($user as $values)	
                            @foreach ($user2 as $values1)
    						   <td>{{ $values->OEM_name }}</td>
                               <td>{{ $values1->OEM_name }}</td>
						   @endforeach
                           @endforeach
					<tr>
                  </thead>
                  <tbody>
                       @foreach ($user3 as $user)
                   <tr>
                   <!-- <th class="fixed-side">{{$user->Feature_Name}}  -  {{$user->Unit_of_Measurement}}</th> -->
				   @if($user->Featureimage == "")
								 			<!-- <input type="hidden" value=""> -->
								 			<td> {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
										@if($user->Featureimage <> "")
										<td class="fixed-side"><span> <img src="{{ url('/UploadImages/NewFeatureMaster/' . $user->Featureimage) }}" ></span>  {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
                   <!--test-->
                   
                   @php
                                     $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 $val = $user->Feature_Name;
                                                                                 $val = str_replace(" ","_",$val);
                                                                                 $val = str_replace("&","",$val);
                                                                                 $val = str_replace("/","",$val);
                                                                                 $val = str_replace("@","",$val);
                                                                                 $val = str_replace("-","_",$val);
																				 $val = str_replace("(","_",$val);
																				 $val = str_replace(")","_",$val);
																				 $val = str_replace("{","_",$val);
																				 $val = str_replace("}","_",$val);
																				 $val = str_replace(",","_",$val);
																				 $val = str_replace("!","_",$val);
																				 $val = str_replace("?","_",$val);
																				 $val = str_replace('!', '_', $val);
																				 $val = str_replace('*', '_', $val);
																				 $val = str_replace('<', '_', $val);
																				 $val = str_replace('>', '_', $val);
																				 $val = str_replace('#', '_', $val);
																				 $val = str_replace('~', '_', $val);
																				 $val = str_replace(":", "_", $val);
                                                                                 $val = str_replace(";", "_", $val);
                                                                                 $val = str_replace(",", "_", $val);
                                                                                 $val = str_replace("+", "_", $val);
                                                                                 $val = str_replace("$", "_", $val);
                                                                                 $val = str_replace("^", "_", $val);
                                                                                 $val = str_replace("`", "_", $val);

                                                                                 $Model_Id_Threec1 = session()->get('Model_Id_Threec1');
                                                                                 $Model_Id_Threec3 = session()->get('Model_Id_Threec3');
                                       
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        
                                        $model_id =$item->id;
                                        $model_id1=$item2->id;
                                         
                                        
                                            $sql = "SELECT * FROM fourwheelerspecsfeatures WHERE id='$Model_Id_Threec1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        //second comparision
                                        $sql1 = "SELECT * FROM fourwheelerspecsfeatures WHERE id='$Model_Id_Threec3'";
                                            $result1 = $conn->query($sql1);
                                            if ($result1->num_rows > 0) {
                                                while ($row1 = $result1->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        
                                        
                                       @endphp
                   
                   
                   <!--test-->
                   
                   @endforeach
                    </tr>
                  </tbody>
            	  <tfoot>
                    <tr>
                      <th class="fixed-side">&nbsp;</th>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
			</section><!--./wheeler-->
		    </div>	
		    @endforeach
		    @break
		    @endforeach
		    

@php
}

@endphp






		    @foreach($user as $item)
		    @foreach($user1 as $item1)
		    @foreach($user2 as $item2)
			<section class="comparision-table-tp ">
				<div class="container">
					<section class="row">
						<div class="bread-comp"><p>{{$item->Model_Name}} -  {{$item->Model_Description}} V/s {{$item1->Model_Name}}  - {{$item1->Model_Description}} V/s {{$item2->Model_Name}} - {{$item2->Model_Description}}<span>
              
              <?php	
                                              $gettitlemodelname = str_replace(" ","_",$item->Model_Name);
                        $gettitlemodeldesc = str_replace(" ","_",$item->Model_Description);

                        $gettitle1modelname = str_replace(" ","_",$item1->Model_Name);
                        $gettitle1modeldesc = str_replace(" ","_",$item1->Model_Description);

                        $gettitle2modelname = str_replace(" ","_",$item2->Model_Name);
                        $gettitle2modeldesc = str_replace(" ","_",$item2->Model_Description);
                                              ?>
                        <a href="#" class='postbutton productshare sharebutton' style='margin-top: 0px !important;'id="{{ url('compare-four-wheeler/'.$gettitlemodelname.'-'.$gettitlemodeldesc.'-VS-'.$gettitle1modelname.'-'.$gettitle1modeldesc.'-VS-'.$gettitle2modelname.'-'.$gettitle2modeldesc)}}" data="{{$item->Model_Name}}-{{$item->Model_Description}}-VS-{{$item1->Model_Name}}-{{$item1->Model_Description}}-VS-{{$item2->Model_Name}}-{{$item2->Model_Description}}"><img src="https://dekhoev.com/WebsiteImages/share.png" alt="sharebutton" style="width:30px;height:30px;"></a></span></div>
						<aside class="col-sm-3 compare-opt">
							<!-- <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							  <label class="form-check-label" for="flexCheckDefault">Hide common features</label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							  <label class="form-check-label" for="flexCheckChecked">Highlight differences</label>
							</div> -->					
						</aside>
						<aside class="col-sm-9 mobile_hide">
							<ul class="compare-list">
								<li>
									<div class="compare-list-bx">
									@if($item->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure>
										@endif
										<h4>{{$item->Model_Name}} - {{$item->Model_Description}} </h4>
										<p>&#8377; {{$item->Price_Ex_Showroom}} /-<span></span></p>
									</div>
								</li>
								<li>
									<div class="compare-list-bx">
									@if($item1->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item1->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item1->Modelimage)}}" class="img-fluid"></figure>
										@endif
										<h4>{{$item1->Model_Name}} -  {{$item1->Model_Description}}</h4> 
										<p>&#8377; {{$item1->Price_Ex_Showroom}} /-<span></span></p>
									</div>
								</li>
								<li>
									<div class="compare-list-bx">
									@if($item2->Modelimage =="")
										<figure><img src="{{ url('/UploadImages/NewModel/Fourwheelerspecsfeature/4W.png')}}" alt="image" class="img-fluid"></figure>                                        
										@endif
										@if($item2->Modelimage <> "")
										<figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item2->Modelimage)}}" class="img-fluid"></figure>
										@endif
										<h4>{{$item2->Model_Name}} - {{$item2->Model_Description}}</h4> 
										<p>&#8377; {{$item2 ->Price_Ex_Showroom}} /- <span></span></p>
									</div>
								</li>
							</ul>		
						</aside>
					</section>
				</div>
			</section>

			<section class="comparision-table-wrap">
				<div class="container">
					<section class="section-wrap"><!--wheeler-->
            <div id="table-scroll" class="table-scroll">
              <div class="table-wrap">
                <table class="main-table">
                  <thead>
                    <tr>
                      <th class="fixed-side wbg" scope="col">Overview</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                    </tr>

                    <tr class='mobile_view'>
						<td class="fixed-side "><span></span></td>
							@foreach ($user as $values)	
                            @foreach ($user1 as $values1)
                            @foreach ($user2 as $values2)
    						   <td><figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item->Modelimage)}}" class="img-fluid"></figure></td>
                               <td><figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item1->Modelimage)}}" class="img-fluid"></figure></td>
                               <td><figure><img src="{{url('/UploadImages/NewModel/Fourwheelerspecsfeature/'. $item2->Modelimage)}}" class="img-fluid"></figure></td>
						   @endforeach
                           @endforeach
                           @endforeach

					<tr>
						<td class="fixed-side"><span><img src="{{ url('/UploadImages/NewFeatureMaster/1670304906.3WC OEM.png' ) }}" ></span>OEM Brand </td>
							@foreach ($user as $values)	
                            @foreach ($user1 as $values1)
                            @foreach ($user2 as $values2)
    						   <td>{{ $values->OEM_name }}</td>
                               <td>{{ $values1->OEM_name }}</td>
                               <td>{{ $values2->OEM_name }}</td>
						   @endforeach
                           @endforeach
                           @endforeach
					<tr>
                  </thead>
                  <tbody>
                       @foreach ($user3 as $user)
                   <tr>
                   <!-- <th class="fixed-side">{{$user->Feature_Name}}  -  {{$user->Unit_of_Measurement}}</th> -->
				   @if($user->Featureimage == "")
								 			<!-- <input type="hidden" value=""> -->
								 			<td> {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
										@if($user->Featureimage <> "")
										<td class="fixed-side"> <span> <img src="{{ url('/UploadImages/NewFeatureMaster/' . $user->Featureimage) }}" ></span>  {{ $user->Feature_Name }}  -    {{$user->Unit_of_Measurement}}</td>
										@endif
                   <!--test-->
                   
                   @php
                                     $servername = "127.0.0.1";
                                     $username = "bleapadmin";
                                     $password = "BLeap!admin123";
                                     $dbname = "dekhoevdb";
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                                                 $val = $user->Feature_Name;
                                                                                 $val = str_replace(" ","_",$val);
                                                                                 $val = str_replace("&","",$val);
                                                                                 $val = str_replace("/","",$val);
                                                                                 $val = str_replace("@","",$val);
                                                                                 $val = str_replace("-","_",$val);
																				 $val = str_replace("(","_",$val);
																				 $val = str_replace(")","_",$val);
																				 $val = str_replace("{","_",$val);
																				 $val = str_replace("}","_",$val);
																				 $val = str_replace(",","_",$val);
																				 $val = str_replace("!","_",$val);
																				 $val = str_replace("?","_",$val);
																				 $val = str_replace('!', '_', $val);
																				 $val = str_replace('*', '_', $val);
																				 $val = str_replace('<', '_', $val);
																				 $val = str_replace('>', '_', $val);
																				 $val = str_replace('#', '_', $val);
																				 $val = str_replace('~', '_', $val);
																				 $val = str_replace(":", "_", $val);
                                                                                 $val = str_replace(";", "_", $val);
                                                                                 $val = str_replace(",", "_", $val);
                                                                                 $val = str_replace("+", "_", $val);
                                                                                 $val = str_replace("$", "_", $val);
                                                                                 $val = str_replace("^", "_", $val);
                                                                                 $val = str_replace("`", "_", $val);
																				 
                                                                                $Model_Id_Threec1 = session()->get('Model_Id_Threec1');
                                                                                 $Model_Id_Threec2 = session()->get('Model_Id_Threec2');
                                                                                 $Model_Id_Threec3 = session()->get('Model_Id_Threec3');
                                                                                 if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        
                                        $model_id =$item->id;
                                        $model_id1=$item1->id;
                                        $model_id2=$item2->id;
                                        
                                        
                                            $sql = "SELECT * FROM fourwheelerspecsfeatures WHERE id='$Model_Id_Threec1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row1 = $result->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        //second comparision
                                        $sql1 = "SELECT * FROM fourwheelerspecsfeatures WHERE id='$Model_Id_Threec2'";
                                            $result1 = $conn->query($sql1);
                                            if ($result1->num_rows > 0) {
                                                while ($row1 = $result1->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row1[$val].'</td>
                                                ';
                                        }}
                                        
                                        //third comparision
                                        
                                        $sql2 = "SELECT * FROM fourwheelerspecsfeatures WHERE id='$Model_Id_Threec3'";
                                            $result2 = $conn->query($sql2);
                                            if ($result2->num_rows > 0) {
                                                while ($row2 = $result2->fetch_assoc()) {
                                                echo' 
                                                <td>'.$row2[$val].'</td>
                                                ';
                                        }}
                                        
                                        
                                       @endphp
                   
                   
                   <!--test-->
                   
                   @endforeach
                   
                    <!--<tr>-->
                    <!--  <th class="fixed-side">Make Model</th>-->
                    <!--  <td>{{$item->Model_Name}}</td>-->
                    <!--  <td>{{$item1->Model_Name}}</td>-->
                    <!--  <td>{{$item2->Model_Name}}</td>-->
                    <!--</tr>-->
                    </tr>
                  </tbody>
            	  <tfoot>
                    <tr>
                      <th class="fixed-side">&nbsp;</th>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
			</section><!--./wheeler-->
		    </div>	
		    @endforeach
		    @endforeach
		    @endforeach
			</section>

			
				@include('DekhoevWebsite/footer')
			

			<!-- Modal -->
<div class="modal fade" id="myModal3">
	<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			<section class="row">
			<aside class="col-sm-3">
				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal4">
					<div class="add-vehicle-in">
						<figure><img src="/icon-add.png"></figure>
						<p>Add Vehicle</p>
					</div>
				</div>
			</aside>
			<aside class="col-sm-3">
				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal4">
					<div class="add-vehicle-in">
						<figure><img src="/icon-add.png"></figure>
						<p>Add Vehicle</p>
					</div>
				</div>
			</aside>
			<aside class="col-sm-3">
				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal4">
					<div class="add-vehicle-in">
						<figure><img src="/icon-add.png"></figure>
						<p>Add Vehicle</p>
					</div>
				</div>
			</aside>
			<aside class="col-sm-3">
				<div class="add-vehicle" data-bs-toggle="modal" data-bs-target="#myModal4">
					<div class="add-vehicle-in">
						<figure><img src="/icon-add.png"></figure>
						<p>Add Vehicle</p>
					</div>
				</div>
			</aside>
			<div class="btn-wrap">
			<a class="btn-pry" href="javascript:;">Compare</a>
			</div>
			</section>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="myModal4" data-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">                        
            <h3>Add Product to Comparison</h3><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
			 <div class="search">
				  <i class="fa fa-search"></i>
				  <input type="text" class="form-control" placeholder="Search">
				  <button class="btn btn-primary">Search</button>
				</div>
				<div class="search-wrap">
					<section class="row">
						<aside class="item-img col-sm-3"><figure><img src="/hyundai-venue.png"></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							<p>Hyundai Venue</p>
							<p class="grn">&#8377; 1,20,000 - &#8377; 1,40,000 </p>	
							</div>					
						</aside>
					</section>				
				</div>
				<div class="search-wrap">
					<section class="row">
						<aside class="item-img col-sm-3"><figure><img src="/hyundai-grand.png"></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							<p>Hyundai Grand i10 Nios</p>
							<p class="grn">&#8377; 1,20,000 - &#8377; 1,40,000 </p>	
							</div>					
						</aside>
					</section>				
				</div>
				<div class="search-wrap">
					<section class="row">
						<aside class="col-sm-3"><figure><img src="{{ url('/logo.png')}}" alt=""></figure></aside>
						<aside class="item-cnt col-sm-9">
							<div class="item-cnt-in">
							<p>Hyundai Venue</p>
							<p class="grn">&#8377; 1,20,000 - &#8377; 1,40,000 </p>	
							</div>
						</aside>
					</section>				
				</div>
        </div>
      </div>
    </div>
</div>
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





