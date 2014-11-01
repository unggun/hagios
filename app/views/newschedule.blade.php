@extends('admin-layout')

@section('content')
	<div class='container'>

	<h3>Tulis jadwal ibadah baru</h3>

	{{ Form::open(array('action' => 'ScheduleController@store', 'enctype' => 'multipart/form-data')) }}

	{{Form::label('division', 'Ibadah Divisi') }}

	{{Form::select('division', array('0' => 'Umum', '1' => 'Lansia', '2' => 'Pria', '3' => 'Wanita', '4' => 'Pemuda', '5' => 'Remaja', '6' => 'Sekolah Minggu', '7' => 'Pasutri'), null , array('class' => 'form-control'))}}

	{{Form::label('speaker', 'Nama Pembicara') }}

	{{Form::text('speaker', '', array('class' => 'form-control'))}}

	{{Form::label('datetime', 'Jadwal Ibadah') }}
	 
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

    {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
	</div>
	
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
@stop