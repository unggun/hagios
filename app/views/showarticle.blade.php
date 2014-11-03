@extends('layout')

@section('content')

<div class="container-fluid full-width">
	<div class="blog-header" style="background-image: url( {{ URL::asset('images/bible.jpg') }} );">
		<!--<img src="images/bible.jpg">-->
		<div class="blog-header-caption">
			<h1 class="uppercase">ARTICLES</h1>
		</div>
	</div>
	
	<div class="row blog-section">
		<div class="container">
		<section>
		      <div class="blogShort clear" style="border:none">
		      	<h2>{{$articledata->aTitle}}</h2>
		      	{{ HTML::image($articledata->aImage1, 'foto/ilustrasi', array('class' => 'pull-left img-responsive img-large margin10 img-thumbnail')) }}
		      	<em>Oleh: {{$articledata->aAuthor}}</em><br />
		      	<em>Posted by at {{date('M d, Y', strtotime($articledata->created_at))}}</em>
		      	<p>{{$articledata->aContent}}</p>
		      	{{ HTML::image($articledata->aImage2, 'foto/ilustrasi', array('class' => 'pull-right img-responsive img-large margin10 img-thumbnail')) }}
		      </div>


		</section>
		</div>
	</div> <!-- End of blog-section -->
</div> <!-- End of Container-fluid -->

@stop