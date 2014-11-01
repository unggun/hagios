@extends('layout')

@section('content')
 <section class="container">

    @foreach($articlesdata as $article)
      <div>
      	<h2>{{$article->aTitle}}</h2>
      	<h5>Penulis: {{$article->aAuthor}}</h5>
      	<p>{{$article->aContent}}</p>
      	<img src="{{$article->aImage1}}">
      </div>
    @endforeach
    </section>
@stop