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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-datetimepicker.min.css') }}" />

    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/_style.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.migrate.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/transition.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/collapse.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.min.js') }}"></script>  
    <script type="text/javascript" src="{{ URL::asset('js/retina-1.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.easing-1.3.pack.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.scrollTo.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.nav.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/imagesloaded.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/smooth-scroll.js') }}"></script>
    {{ HTML::script('js/wysihtml5/parser_rules/advanced.js'); }}
    {{ HTML::script('js/wysihtml5/dist/wysihtml5-0.3.0.min.js'); }}
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
  </head>
  <body>


  @yield('content')

  </body>
</html>