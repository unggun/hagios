@extends('admin-layout')

@section('content')
	<div class='container admin-content'>

	@if(Session::has('errors'))
        <div class="alert alert-danger" role="alert">
            Pastikan kolom isian dengan tanda '*' telah diisi!
        </div>
    @elseif(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif

	<h2>Edit artikel</h2>

	{{ Form::open(array('route' => ['article-update', $article->aSlug], 'enctype' => 'multipart/form-data')) }}

	{{Form::label('division', 'Divisi') }}*

	 {{Form::select('division',array('0' => 'Umum','1' => 'Lansia', '2' => 'Pria', '3' => 'Wanita', '4' => 'Pemuda', '5' => 'Remaja', '6' => 'Sekolah Minggu', '7' => 'Pasutri'), $article->aType , array('class' => 'form-control'))}}

	 {{Form::label('title', 'Judul') }}*

	 {{Form::text('title', $article->aTitle, array('class' => 'form-control'))}}

	 {{Form::label('author', 'Penulis') }}*

	 {{Form::text('author', $article->aAuthor, array('class' => 'form-control'))}}

	 {{Form::label('content', 'Isi Artikel') }}*

	 <div id="wysihtml5-toolbar">
	 	<a data-wysihtml5-command="bold"><button type="button" class="btn btn-default"><i class="fa fa-bold"></i></button></a>
	 	<a data-wysihtml5-command="italic"><button type="button" class="btn btn-default"><i class="fa fa-italic"></i></button></a>
	 	<a data-wysihtml5-command="underline"><button type="button" class="btn btn-default"><i class="fa fa-underline"></i></button></a>
	 	<a data-wysihtml5-command="insertUnorderedList"><button type="button" class="btn btn-default"><i class="fa fa-list-ul"></i></button></a>
	 	<a data-wysihtml5-command="insertOrderedList"><button type="button" class="btn btn-default"><i class="fa fa-list-ol"></i></button></a>
	 </div>
	 {{Form::textarea('content', $article->aContent, array('class' => 'form-control', 'id' => 'wysihtml5-textarea', 'autofocus'))}}

	 {{Form::label('image1', 'Ubah Gambar/foto/ilustrasi 1') }}

	 {{ Form::file('image1') }}

	 {{Form::label('image2', 'Ubah Gambar/foto/ilustrasi 2') }}

	 {{ Form::file('image2') }}

	 {{'<br />* = wajib diisi<br /><br />'}}

	 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
	</div>

	<script>
		var editor = new wysihtml5.Editor("wysihtml5-textarea", { // id of textarea element
		  toolbar:      "wysihtml5-toolbar", // id of toolbar element
		  parserRules:  wysihtml5ParserRules // defined in parser rules set 
		});
	</script>
@stop