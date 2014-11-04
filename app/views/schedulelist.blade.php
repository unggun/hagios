@extends('admin-layout')

@section('content')
<div class="container post-list">
	<h2>Daftar Jadwal Ibadah</h2>
	<table class="table table-stripped table-hover">
		<tr>
			<th>#</th>
			<th>Divisi</th>
			<th>Tanggal & Waktu</th>
			<th>Pembicara</th>
			<th>Posted by</th>
			<th>Update Terakhir</th>
			<th>Updated by</th>
			<th>Edit/Delete</th>
		</tr>

		<?php $count = 0; ?>
		@foreach($schedulesdata as $schedule)
		<?php $count++; ?>
		  <tr>
		  	<td>{{$count}}</td>
		  	<td>{{$divisionName[$schedule->sSvId]}}</td>
		  	<td>{{$schedule->sTime}}</td>
		  	<td>{{$schedule->sSpeaker}}</td>
		  	<td>{{$schedule->sPostedBy}}</td>
		  	<td>{{$schedule->updated_at}}</td>
		  	<td>{{$schedule->sUpdated_by}}</td>
		  	<td>
		  		<a href="{{URL::route('schedule-edit',$schedule->id)}}"><button type="button" class="btn btn-default">Edit</button></a>
		  		<a href="{{URL::route('schedule-delete',$schedule->id)}}"  onclick="if(!confirm('Are you sure to delete this item?')){return false;};"><button type="button" class="btn btn-danger">Delete</button></a>
		  	</td>
		  </tr>
		@endforeach
    </table>
    {{$schedulesdata->links()}}
</div>
@stop