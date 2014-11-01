@extends('layout')

@section('content')

<div class="bcg full-screen" style="background-image: url('{{ URL::asset('images/team-'.$teamdata->tId.'.jpg') }}')">
	<div class="team-content">
		<h1>{{$teamdata->tName}}</h1>
		<p>{{$teamdata->tDesc}}</p>
	</div>
</div>

@stop