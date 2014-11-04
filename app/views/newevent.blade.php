@extends('admin-layout')

@section('content')
	<div class='container admin-content'>
    @if(Session::has('errors'))
        <div class="alert alert-danger" role="alert">
            Pastikan kolom isian dengan tanda '*' telah diisi!
        </div>
    @endif

	<h2>Tambah Event/Acara Baru</h2>

	{{ Form::open(array('action' => 'UpcomingController@store', 'enctype' => 'multipart/form-data')) }}

	{{Form::label('division', 'Acara Divisi') }}*

	{{Form::select('division', array('0' => 'Umum', '1' => 'Lansia', '2' => 'Pria', '3' => 'Wanita', '4' => 'Pemuda', '5' => 'Remaja', '6' => 'Sekolah Minggu', '7' => 'Pasutri'), null , array('class' => 'form-control'))}}

	{{Form::label('name', 'Nama Acara') }}*

	{{Form::text('name', '', array('class' => 'form-control'))}}

    {{Form::label('image', 'Upload Poster Acara') }}*

     {{ Form::file('image') }}

     {{Form::label('description', 'Keterangan tambahan acara') }}

     {{Form::textarea('description', '', array('class' => 'form-control'))}}

	{{Form::label('datetime', 'Kapan acara ini berakhir?') }}*
	 
	<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1">
                    {{Form::text('datetime', '', array('class' => 'form-control'))}}
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>


    {{ Form::hidden('user', Auth::user()->name)}}

    {{'<br />* = wajib diisi<br /><br />'}}

    {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
	</div>
	
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
@stop