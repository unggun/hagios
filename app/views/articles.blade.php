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
		   @foreach($articlesdata as $article)
		      <div class="blogShort clear">
		      	<h2>{{$article->aTitle}}</h2>
		      	{{ HTML::image($article->aImage1, 'foto/ilustrasi', array('class' => 'pull-left img-responsive thumb margin10 img-thumbnail')) }}
		      	<em>Oleh: {{$article->aAuthor}}</em><br />
		      	<em>Posted by </em>
		      	<p>{{$article->aIntro}}...</p>
		      	<a class="btn btn-blog pull-right marginBottom10" href="http://bootsnipp.com/user/snippets/2RoQ">READ MORE</a>
		      </div>
		    @endforeach


		</section>
		</div>
	</div> <!-- End of blog-section -->
</div> <!-- End of Container-fluid -->

@stop