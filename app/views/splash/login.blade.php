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
	<noscript>
		<link rel="stylesheet" href="{{asset('css/skel.css')}}" />
		<link rel="stylesheet" href="{{asset('css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('css/style-wide.css')}}" />
	</noscript>
	<title>Welcome</title>
</head>
<body>
<section id="main" class="container">
<div class="row">
					<div class="12u">
						
						<!-- Form -->
							<section class="box">
								<h3>Login</h3>
								<center></center>
								<form method="post" action="{{action('HomeViewController@handleViewLogin')}}">
									<div class="row uniform half ollapse-at-2">
										<div class="6u">
											<input type="email" name="email" id="name" value="" placeholder="email" />
										</div>
										<div class="6u">
											<input type="password" name="password" id="email" value="" placeholder="password" />
										</div>
									</div>
									<br>
									<div class="12u">
											<input type="submit" value="login" class="fit" />
									</div>
								</form>
							</section>

					</div>
				</div>
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
</section>
	</body>
</html>