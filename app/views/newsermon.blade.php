@extends('admin-layout')

@section('content')
	<div class='container'>

	<h3>Tulis khotbah baru</h3>

	{{ Form::open(array('action' => 'SermonController@store', 'enctype' => 'multipart/form-data')) }}

	 {{Form::label('title', 'Judul') }}

	 {{Form::text('title', '', array('class' => 'form-control'))}}

	 {{Form::label('author', 'Penulis') }}

	 {{Form::text('author', '', array('class' => 'form-control'))}}

	 {{Form::label('content', 'Isi Artikel') }}

	 {{Form::textarea('content', '', array('class' => 'form-control'))}}

	 {{Form::label('image1', 'Upload Gambar/foto/ilustrasi 1') }}

	 {{ Form::file('image1') }}

	 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
	</div>
@stop