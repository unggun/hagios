<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hagios Family</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/icons.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}" media="screen">

    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/_style.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<!--<div class="container-fluid">-->
    <!-- Start Header -->
	<header id="header" class="header-2 dark-header">
			<div class="container">
	        <!-- Logo -->
	        <div id="logo">
	            <a href="{{URL::route('home')}}">
	            	<img alt="" src="{{ URL::asset('images/logo-small.png') }}" />
	            	<h1>HAGIOS FAMILY</h1>
	            </a>
	        </div>
	        
	        <!-- Toggle Menu - Responsive -->
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu"><i class="icon-menu2"></i></button>
	        
	        <!-- Navigation Menu -->
	        <nav id="nav-menu" class="nav-menu collapse navbar-collapse">
	        	<ul>
	            	<li><a href="{{URL::route('home')}}">Home</a></li>
	                <li><a href="{{URL::route('servicetime')}}">Service Time</a></li>
	                <li class="drop">
	                    <a href="#">News</a>
	                    <ul class="dropdown">
	                        <li><a href="{{URL::route('article')}}">Articles</a></li>
	                        <li><a href="{{URL::route('sermon')}}">Sermon</a></li>
	                    </ul>
	                </li>
	                <li class="drop">
	                    <a href="#">Divisions</a>
	                    <ul class="dropdown">
	                        <li><a href="{{URL::to('division/elders')}}">Elders</a></li>
	                        <li><a href="{{URL::to('division/men')}}">Hagios Men</a></li>
	                        <li><a href="{{URL::to('division/women')}}">Debora Women</a></li>
	                        <li><a href="{{URL::to('division/youth')}}">Hagios Youth</a></li>
	                        <li><a href="{{URL::to('division/teens')}}">Hagios Teens</a></li>
	                        <li><a href="{{URL::to('division/kids')}}">Hagios Kids</a></li>
	                        <li><a href="{{URL::to('division/married-couples')}}">Hagios Married Couples</a></li>
	                    </ul>
	                </li>
	                <li class="drop">
	                    <a href="#">Teams</a>
	                    <ul class="dropdown">
	                        <li><a href="{{URL::to('team/hgn')}}">Hagios Good News</a></li>
	                        <li><a href="{{URL::to('team/ppa')}}">PPA LG</a></li>
	                        <li><a href="{{URL::to('team/pi')}}">PI "El Shaddai" Team</a></li>
	                        <li><a href="{{URL::to('team/music')}}">Hagios Music Ministry</a></li>
	                        <li><a href="{{URL::to('team/immanuel')}}">Immanuel Choir</a></li>
	                        <li><a href="{{URL::to('team/seraphim')}}">Seraphim Choir</a></li>
	                        <li><a href="{{URL::to('team/hdc')}}">Hagios Dance Crew</a></li>
	                    </ul>
	                </li>
	                <li><a href="{{URL::to('hsol')}}">H.S.O.L.</a></li>
	                <li class="drop">
	                    <a href="#">About Us</a>
	                    <ul class="dropdown">
	                        <li><a href="{{URL::to('vision-mission')}}">Vision and Mission</a></li>
	                        <li><a href="{{URL::to('our-pastors')}}">Our Pastors</a></li>
	                        <li><a href="{{URL::to('our-history')}}">Our History</a></li>
	                        <li><a href="{{URL::to('deacon')}}">Deacon</a></li>
	                        <li><a href="{{URL::to('permata')}}">"Permata"</a></li>
	                    </ul>
	                </li>
	            </ul>
	        </nav>
	        
	        </div>
	</header>
	<!-- End Header -->

	@yield('content')


	<footer class="clear">
		<div class="container-fluid">
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-2"><img src="{{ URL::asset('images/logo-line-cut.png') }}" class="img-responsive"></div>
				<div id="social-icon" class="text-center col-xs-12 col-md-7">
					<a href="https://www.facebook.com/hagios-family"><i id="social" class="fa fa-facebook fa-3x social-fb"></i></a>
		            <a href="https://twitter.com/hagiosfamily"><i id="social" class="fa fa-twitter fa-3x social-tw"></i></a>
		            <a href="https://www.youtube.com/channel/UC1oNCkXtYcihwOX2ihAT55g"><i id="social" class="fa fa-youtube-play fa-3x social-gp"></i></a>
		            <a href="mailto:hagiosfamily@gmail.com"><i id="social" class="fa fa-envelope fa-3x social-em"></i></a>
				</div>
				<div id="footer-right" class="col-xs-12 col-md-3">
					<h3>Our Address</h3>
					<p>Sosrowijayan Street No. 80<br>Yogyakarta</p>
					<br>
					<h3>Contact Us</h3>
					<p>+62 274 - 563832 (Telp.)<br>+62 274 - 564995 (Fax)</p>
				</div>
			</div>
		</div>
	</footer>


	<!--</div>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.migrate.j') }}s"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/retina-1.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.easing-1.3.pack.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.parallax.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.scrollTo.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.nav.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/imagesloaded.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/smooth-scroll.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
  </body>
</html>