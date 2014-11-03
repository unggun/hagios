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

	<h2>Edit Event/Acara</h2>

	{{ Form::open(array('route' => ['event-update', $upcoming->uSlug], 'enctype' => 'multipart/form-data')) }}

	{{Form::label('division', 'Acara Divisi') }}*

	{{Form::select('division', array('0' => 'Umum', '1' => 'Lansia', '2' => 'Pria', '3' => 'Wanita', '4' => 'Pemuda', '5' => 'Remaja', '6' => 'Sekolah Minggu', '7' => 'Pasutri'), $upcoming->uType , array('class' => 'form-control'))}}

	{{Form::label('name', 'Nama Acara') }}*

	{{Form::text('name', $upcoming->uName, array('class' => 'form-control'))}}

    {{Form::label('old-image', 'Poster Acara Saat Ini')}}<br />

    {{ HTML::image($upcoming->uImage, 'foto/ilustrasi', array('style' => 'max-width: 200px;')) }} <br /><br />

    {{Form::label('image', 'Ubah Poster Acara') }}

     {{ Form::file('image') }}

     {{Form::label('description', 'Keterangan tambahan acara') }}

     {{Form::textarea('description', $upcoming->uDesc, array('class' => 'form-control'))}}

	{{Form::label('datetime', 'Kapan acara ini berakhir?') }}*
	 
	<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1">
                    {{Form::text('datetime', date('d-m-Y h:i', strtotime($upcoming->uExpire_at)), array('class' => 'form-control'))}}
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>


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