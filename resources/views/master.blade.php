<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'About us ~ Tilde')</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:300&amp;subset=latin,latin-ext">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700&amp;subset=latin,latin-ext">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
	    $(document).ready(function(){
	        $('#res-menu').on('click', function(e){
	            e.preventDefault();
	            $('header nav').slideToggle('slow');
	        });
	    });
	</script>
</head>
<body class="{{ Request::segment(1) ?: 'home' }}">
	<header>
		<div class="content clearfix">
			<h1>
				<a href="#"><img src="img/logo.png" alt="Logo"></a>
			</h1>
			<a href="#" id="res-menu">Menu</a>
			<nav>
				<ul>
					<li><a href="/" {{ (Request::segment(1) == '') ? ' class=active' : '' }}>About us</a></li>
					<li><a href="consulting" {{ (Request::segment(1) == 'consulting') ? ' class=active' : '' }}>Consulting</a></li>
					<li><a href="training" {{ (Request::segment(1) == 'training') ? ' class=active' : '' }}>Training</a></li>
					<li><a href="contact" {{ (Request::segment(1) == 'contact') ? ' class=active' : '' }}>Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main>
        @yield('content')
	</main>
	<footer>
		<div class="content">
			<nav>
				<ul>
					<li><a href="">About Us</a></li>
					<li><a href="">Consulting</a></li>
				</ul>
				<a id="footer-logo" href=""><img src="img/logo-footer.png" alt=""></a>
				<ul>
					<li><a href="">Training</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</nav>
			<p>Copyright 2015 Tilde Inc.</p>
		</div>
	</footer>
</body>
</html>