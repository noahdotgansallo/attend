<?php $user = Sentry::getUser();
?>
<html>
<head>
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
	<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
	<title>@yield('title')</title>
</head>
<body @if(!empty($banner)) class="{{$banner}}" @endif>

		<!-- Header -->
			<header id="header" class="alt" @if(empty($banner))style="background:#444!important;position:fixed"@endif>
				<h1><a href="{{action('HomeViewController@dashboard')}}">@tend</a> by Ash and Tree</h1>
				<nav id="nav">
					<ul>
						<!--<li>
							<a href="" class="icon fa-angle-down">Layouts</a>
							<ul>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li>
									<a href="">Submenu</a>
									<ul>
										<li><a href="#">Option One</a></li>
										<li><a href="#">Option Two</a></li>
										<li><a href="#">Option Three</a></li>
										<li><a href="#">Option Four</a></li>
									</ul>
								</li>
							</ul>
						</li>-->
						<li><a style="margin-top:13px!Important" href="{{action('HomeViewController@logout')}}" class="button">logout</a></li>
					</ul>
				</nav>
			</header>
			@if(!empty($banner))
				@yield('header')

				@yield('content')
			@else
				<section id="main" class="container">
					@yield('header')

					@yield('content')
				<section id="main" class="container">
			@endif
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
					<li>&copy; @tend. All rights reserved.</li><li>Creators: <a href="http://www.facebook.com/noahdotgansallo">Noah Gansallo</a> and  <a href="https://www.facebook.com/jamesestmoi">James Pickering</a></li>
				</ul>
			</footer>

	</body>
</html>