@extends('admin-layout')

@section('content')
<div class="container post-list">
	@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
	<h2>Daftar Iklan Kegiatan</h2>
	<table class="table table-stripped table-hover">
		<tr>
			<th>#</th>
			<th>Nama</th>
			<th>Divisi</th>
			<th>Poster</th>
			<th>Posted by</th>
			<th>Berakhir Tanggal</th>
			<th>Update Terakhir</th>
			<th>Updated by</th>
			<th>Edit/Delete</th>
		</tr>

		<?php $count = 0; ?>
		@foreach($upcomings as $upcoming)
		<?php $count++; ?>
		  <tr>
		  	<td>{{$count}}</td>
		  	<td>{{$upcoming->uName}}</td>
		  	<td>{{$divisionName[$upcoming->uType]}}</td>
		  	<td>{{ HTML::image($upcoming->uImage, 'foto/ilustrasi', array('style' => 'max-width: 100px')) }}</td>
		  	<td>{{$upcoming->uPosted_by}}</td>
		  	<td>{{date("Y-m-d H:i:s", strtotime($upcoming->uExpire_at))}}</td>
		  	<td>{{$upcoming->updated_at}}</td>
		  	<td>{{$upcoming->uUpdated_by}}</td>
		  	<td>
		  		<a href="{{URL::route('event-edit',$upcoming->uSlug)}}"><button type="button" class="btn btn-default">Edit</button></a>
		  		<a href="{{URL::route('event-delete',$upcoming->uSlug)}}"  onclick="if(!confirm('Are you sure to delete this item?')){return false;};"><button type="button" class="btn btn-danger">Delete</button></a>
		  	</td>
		  </tr>
		@endforeach
    </table>
    {{$upcomings->links()}}
</div>
@stop