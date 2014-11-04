<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hagios Family - Log In</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}" media="screen">
    <link href="{{ URL::asset('css/login-style.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	
  	<div class="container">
		<div class="login-container">
	            	@if(Session::has('errors'))
				        <div id="output" class="alert alert-danger animated fadeInUp" role="alert">
				            {{Session::get('errors')}}
				        </div>
				    @endif
	            <div class="avatar"></div>
	            <div class="form-box">
	                {{ Form::open(array('route' => 'doLogin')) }}

	 				{{Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'username'))}}

	 				{{Form::password('password', array('class' => 'form-control', 'placeholder' => 'password'))}}

	                <button class="btn btn-info btn-block login" type="submit">Login</button>

	                {{ Form::close() }}
	            </div>
	        </div>
	</div>


	<!--</div>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.migrate.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/retina-1.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.easing-1.3.pack.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.parallax.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.scrollTo.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/imagesloaded.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/smooth-scroll.js') }}"></script>
  </body>
</html>