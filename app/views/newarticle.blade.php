@extends('admin-layout')

@section('content')
	<div class='container'>

	<h3>Tulis artikel baru</h3>

	{{ Form::open(array('action' => 'ArticleController@store', 'enctype' => 'multipart/form-data')) }}
	{{Form::label('division', 'Divisi') }}

	 {{Form::select('division', array('0' => 'Umum','1' => 'Lansia', '2' => 'Pria', '3' => 'Wanita', '4' => 'Pemuda', '5' => 'Remaja', '6' => 'Sekolah Minggu', '7' => 'Pasutri'), null , array('class' => 'form-control'))}}



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