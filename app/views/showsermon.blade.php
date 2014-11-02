@extends('layout')

@section('content')

<div class="container-fluid full-width">
	<div class="blog-header" style="background-image: url( {{ URL::asset('images/sermon.jpg') }} );">
		<!--<img src="images/bible.jpg">-->
		<div class="blog-header-caption">
			<h1 class="uppercase">SERMON</h1>
		</div>
	</div>
	
	<div class="row blog-section">
		<div class="container">
		<section>
		      <div class="blogShort clear">
		      	<h2>{{$sermondata->srTitle}}</h2>
		      	{{ HTML::image($sermondata->srImage, 'foto/ilustrasi', array('class' => 'pull-left img-responsive img-large margin10 img-thumbnail')) }}
		      	<em>Oleh: {{$sermondata->srName}}</em><br />
		      	<em>Posted by at {{date('M d, Y', strtotime($sermondata->created_at))}}</em>
		      	<p>{{$sermondata->srContent}}</p>
		      </div>


		</section>
		</div>
	</div> <!-- End of blog-section -->
</div> <!-- End of Container-fluid -->

@stop