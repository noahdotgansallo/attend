<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@tend</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/jquery.dropotron.min.js')}}"></script>
		<script src="{{asset('js/jquery.scrollgress.min.js')}}"></script>
		<script src="{{asset('js/skel.min.js')}}"></script>
		<script src="{{asset('js/skel-layers.min.js')}}"></script>
		<script src="{{asset('js/init.js')}}"></script>
		<link rel="stylesheet" href="{{asset('css/skel.css')}}" />
		<link rel="stylesheet" href="{{asset('css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('css/style-wide.css')}}" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="{{action('HomeController@vRegister')}}">@tend</a> by Ash and Tree</h1>
				<nav id="nav">
					<ul>
						<li><a href="#" class="button">login</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>@tend</h2>
				<p>Making GPS technology work for you</p>
				<ul class="actions">
					<li><a href="#cta" class="button special">Sign Up</a></li>
					<li><a href="#learnmore" class="button">Learn More</a></li>
				</ul>
			</section>

		<!-- Main -->
			<section id="main" class="container">
		
				<section class="box special" id="learnmore">
					<header class="major">
						<h2>Introducing the ultimate attendance app</h2>
						<p>Having GPS do all the work in attendance</p>
					</header>
					<span class="image featured"><img src="images/map.jpg" alt="" /></span>
				</section>
						
				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon major fa-location-arrow accent2"></span>
							<h3>GPS Support</h3>
						</section>
						<section>
							<span class="icon major fa-area-chart accent3"></span>
							<h3>Ipsum dolor</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
					</div>
					<div class="features-row">
						<section>
							<span class="icon major fa-cloud accent4"></span>
							<h3>Sed feugiat</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
						<section>
							<span class="icon major fa-lock accent5"></span>
							<h3>Enim phasellus</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						</section>
					</div>
				</section>
					
				<div class="row">
					<div class="6u 12u(2)">

						<section class="box special">
							<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
							<h3>Sed lorem adipiscing</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</section>
						
					</div>
					<div class="6u 12u(2)">

						<section class="box special">
							<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
							<h3>Accumsan integer</h3>
							<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</section>

					</div>
				</div>

			</section>
			
		<!-- CTA -->
			<section id="cta">
				
				<h2>Sign up for beta access</h2>
				<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>
				
				<form>
					<div class="row uniform 50%">
						<div class="8u 12u(3)">
							<input type="email" name="email" id="email" placeholder="Email Address" />
						</div>
						<div class="4u 12u(3)">
							<input type="submit" value="Sign Up" class="fit" />
						</div>
					</div>
				</form>
				
			</section>
			
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>

	</body>
</html>