@extends('admin-layout')

@section('content')
	<div class='container admin-content'>

	@if(Session::has('errors'))
        <div class="alert alert-danger" role="alert">
            Pastikan kolom isian dengan tanda '*' telah diisi!
        </div>
    @endif

	<h2>Tulis khotbah baru</h2>

	{{ Form::open(array('action' => 'SermonController@store', 'enctype' => 'multipart/form-data')) }}

	 {{Form::label('title', 'Judul') }}*

	 {{Form::text('title', '', array('class' => 'form-control'))}}

	 {{Form::label('author', 'Penulis') }}*

	 {{Form::text('author', '', array('class' => 'form-control'))}}

	 {{Form::label('content', 'Isi Artikel') }}*

	 <div id="wysihtml5-toolbar">
	 	<a data-wysihtml5-command="bold"><button type="button" class="btn btn-default"><i class="fa fa-bold"></i></button></a>
	 	<a data-wysihtml5-command="italic"><button type="button" class="btn btn-default"><i class="fa fa-italic"></i></button></a>
	 	<a data-wysihtml5-command="underline"><button type="button" class="btn btn-default"><i class="fa fa-underline"></i></button></a>
	 	<a data-wysihtml5-command="insertUnorderedList"><button type="button" class="btn btn-default"><i class="fa fa-list-ul"></i></button></a>
	 	<a data-wysihtml5-command="insertOrderedList"><button type="button" class="btn btn-default"><i class="fa fa-list-ol"></i></button></a>
	 </div>
	 {{Form::textarea('content', '', array('class' => 'form-control', 'id' => 'wysihtml5-textarea', 'autofocus'))}}

	 {{Form::label('image1', 'Upload Gambar/foto/ilustrasi 1') }}

	 {{ Form::file('image1') }}

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