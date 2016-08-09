<!DOCTYPE html>
<html>
<head>
<title>E-com</title>
<link href="{{ URL::asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{ URL::asset('css/store.css')}}" rel="stylesheet" type="text/css" media="all" />	
<link href="{{URL::asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smartphone,Laptop, Samsung, LG, S6 "/>

<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->

</head>

<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
	    	<div class="social">
				<ul>
					<li><a href="#"><i class="facebok"> </i></a></li>
					<li><a href="#"><i class="twiter"> </i></a></li>
					<li><a href="#"><i class="inst"> </i></a></li>
					<li><a href="#"><i class="goog"> </i></a></li>
					<div class="clearfix"></div>	
				</ul>
			</div>
			<div class="header-left">
<!--			
		    	<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form>
							<input class="sb-search-input" placeholder="Enter your search term..." type="search"  id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						</form>
					</div>
				</div>
-->
				<ul class="memenu skyblue">

					@if (Auth::guest())
						<li><a class="color4" href="{{URL('login')}}">Login</a></li>|
						<!-- <i class="fa fa-btn fa-sign-out"></i> <li class="top_link"><a href="logout">Sign Out</a></li>| -->
						<li><a class="color4" href="{{URL('register')}}">Register</a></li>
						@else
						<!-- Displays the name of the authenticated users. -->
						<li><a class="color4" href="#">{{ Auth::user()->name }}</a></li>
						<li><a class="color4" href="{{URL('logout')}}">Logout</a></li>
					@endif
									
					<li><a class="color6" href="contact.html">Contact</a></li>
				</ul>
				

				<div class="ca-r">
					<div class="cart box_1">
						<a href="/">
						    <h3> <div class="total">
							    <span class="simpleCart_total"></span> </div>
						    	<img src="images/cart.png" alt=""/>
                            </h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
</div>

        <!--content-->
            @include('layouts.flash')
			@yield('content')
        <!--end content-->

<div class="footer">
	<div class="container">
		<div class="footer-top-at">		
			<div class="col-md-3 amet-sed">
    			<h4>MORE INFO</h4>
				<ul class="nav-bottom">
					<li><a href="#">How to order</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="contact.html">Location</a></li>
					<li><a href="#">Shipping</a></li>
					<li><a href="#">Membership</a></li>	
				</ul>	
			</div>

			<div class="col-md-3 amet-sed">
				<h4></h4>
				<div class="stay">
			    </div>	
			</div>
			<div class="col-md-3 amet-sed ">
			    <h4>CONTACT US</h4>
				<p>contact at contace</p>
				<p>The loacation of Contacr</p>
				<p>office :  +12 34 567 8901</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-class">
	   	<p>© 2016 . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- search-scripts -->
	<script src="{{asset('js/classie.js')}}"></script>
	<script src="{{asset('js/uisearch.js')}}"></script>
	<script>new UISearch( document.getElementById( 'sb-search' ) );</script>
	<!-- //search-scripts -->
    <script type="text/javascript" src="{{ asset('js/memenu.js')}}"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <script src="{{asset('js/simpleCart.min.js')}}"> </script>
</body>
</html>
			