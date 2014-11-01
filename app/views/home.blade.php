@extends('layout')

@section('content')
<div id="home" class="">
	<div id="welcome-screen" class="bcg">
		<div id="welcome-text">
			<h1>WELCOME TO OUR CHURCH</h1>
			<p><em>"Menjadikan jemaat yang kudus dan tak bercacat cela sebagai tiang gereja dan terang dunia."</em></p>
		</div>
	</div>
</div>

<div class="clear"></div>

<div id="middle-row" class="container-fluid">
	<div class="row">
		<div id="sunday-service" class="col-xs-12 col-md-3">
			<h3>Sunday Services</h3>
			<span class="glyphicon glyphicon-book"></span>
			<p>{{date('M d, Y | H:i', strtotime($schedulesdata[0]->sTime))}}</p>
			<p>{{$schedulesdata[0]->sSpeaker}}</p>
			<br />
			<p>{{date('M d, Y | H:i', strtotime($schedulesdata[1]->sTime))}}</p>
			<p>{{$schedulesdata[1]->sSpeaker}}</p>
			<a href="{{URL::route('servicetime')}}">more >></a>
			<br /><br />
			<button class="btn-sys btn-dark btn-border btn-large btn-crv" data-toggle="modal" data-target="#mapModal">Get Direction</button>
			<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h4 class="modal-title" id="myModalLabel">Direction to Hagios Family Church</h4>
				      </div>
				      <div class="modal-body">
				        By TransJogja bus : take ....
				        By Car : ....
				      </div>
				    </div>
				  </div>
				</div>
			<br />
			<a href="#">New to Christianity?</a>
		</div>
		<div id="content" class="col-xs-12 col-md-9">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner container">
				    <div class="item active">
					  {{ HTML::image($sermondata->srImage, 'foto/ilustrasi', array('class' => 'pull-left img-responsive thumb margin10 img-thumbnail')) }}
				      <article>
							<h2>{{$sermondata->srTitle}}</h2>
							<p>Oleh :  {{$sermondata->srName}}</p><br>
							<p>
								{{$sermondata->srIntro}}...</p>
								<button type="button" class="btn btn-primary pull-right">Read More</button>
						</article>
				      </div>
				    <div class="item">
					  {{ HTML::image($articledata->aImage1, 'foto/ilustrasi', array('class' => 'pull-left img-responsive thumb margin10 img-thumbnail')) }}
				      <article>
							<h2>{{$articledata->aTitle}}</h2>
							<p>Oleh : {{$articledata->aAuthor}}</p><br>
							<p>{{$articledata->aIntro}}...</p>
								<button type="button" class="btn btn-primary pull-right">Read More</button>
						</article>
				    </div>
				  </div>
				  <!-- Controls-->
				  <a class="left carousel-control control-middle" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control control-middle" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
			</div>
		</div>
	</div>
</div>


<div id="event-container" class="clear">
		<div id="container-title">
			<h2>Upcoming Events</h2>
			<p>We invite you to join these events!</p>
		</div>
		<div class="container-fluid">
		<div class="event-content row">
			<div class="img-content col-md-6">
				{{ HTML::image('images/gumregah.jpg', 'foto/ilustrasi', array('class' => 'img-responsive thumb margin10 img-thumbnail')) }}
				<h4>Youth Celebration 2013 "Revolution"</h4>
			</div>
			<div class="img-content col-md-6">
				{{ HTML::image('images/yc2013.jpg', 'foto/ilustrasi', array('class' => 'img-responsive thumb margin10 img-thumbnail')) }}
				<h4>Youth Celebration 2013 "Revolution"</h4>
			</div>
		</div>
		</div>	
	</div>

@stop