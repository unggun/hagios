@extends('layout')

@section('content')

<div class="container-fluid full-width">
	<div class="blog-header" style="background-image: url( {{ URL::asset('images/hblog-'.$divisiondata->dvSlug.'.jpg') }} );">
		<!--<img src="images/bible.jpg">-->
		<div class="blog-header-caption">
			<h1 class="uppercase">HAGIOS {{$divisiondata->dvName}}</h1>
		</div>
	</div>
	
	<div class="row blog-section">
		<div class="container">
		<section class="col-md-9">
			@foreach($articlesdata as $article)
		      <div class="blogShort clear">
		      	<h2>{{$article->aTitle}}</h2>
		      	{{ HTML::image($article->aImage1, 'foto/ilustrasi', array('class' => 'pull-left img-responsive thumb margin10 img-thumbnail')) }}
		      	<em>Oleh: {{$article->aAuthor}}</em><br />
		      	<em>Posted by at {{date('M d, Y', strtotime($article->created_at))}}</em>
		      	<p>{{$article->aIntro}}...</p>
		      	<a class="btn btn-blog pull-right marginBottom10" href="{{URL::route('showarticle',$article->aSlug)}}">READ MORE</a>
		      </div>
		    @endforeach
		    {{ $articlesdata->links() }}

		</section>
		<aside class="col-md-3">
			<div class ="side-info well">
				<h3>Service Day</h3>
				<p>{{$divisiondata->dvDay}}</p>
				<hr />
				<h3>Service Time</h3>
				<p>{{$divisiondata->dvTime}}</p>
				<hr />
				<h3>Service Venue</h3>
				<p>{{$divisiondata->dvVenue}}</p>
			</div>
			@if ($divisiondata->dvId != 6 && !empty($schedule))
				<div class ="side-info well">
					<h3>Jadwal ibadah berikutnya</h3>
					<p>{{date('M d, Y | H:i', strtotime($schedule->sTime))}}</p>
					<hr />
					<h3>Pembicara</h3>
					<p>{{$schedule->sSpeaker}}</p>
				</div>
			@endif
			@if (!empty($eventdata))
				<div class ="side-info well">
					<h3>Event/Acara berikutnya</h3>
					<p>{{ HTML::image($eventdata->uImage, 'foto/ilustrasi', array('class' => 'img-responsive thumb margin10 img-thumbnail')) }}</p>
					<p>{{$eventdata->uName}}</p>
				</div>
			@endif
			{{ $extraSection }}
		</aside>
		</div>
	</div> <!-- End of blog-section -->
</div> <!-- End of Container-fluid -->

@stop