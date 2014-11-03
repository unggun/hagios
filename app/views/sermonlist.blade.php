@extends('admin-layout')

@section('content')
<div class="container post-list">
	@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
	<h2>Daftar Khotbah</h2>
	<table class="table table-stripped table-hover">
		<tr>
			<th>#</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>User</th>
			<th>Update Terakhir</th>
			<th>Edit/Delete</th>
		</tr>

		<?php $count = 0; ?>
		@foreach($sermonsdata as $sermon)
		<?php $count++; ?>
		  <tr>
		  	<td>{{$count}}</td>
		  	<td>{{$sermon->srTitle}}</td>
		  	<td>{{$sermon->srName}}</td>
		  	<td></td>
		  	<td>{{$sermon->updated_at}}</td>
		  	<td>
		  		<a href="{{URL::route('sermon-edit',$sermon->srSlug)}}"><button type="button" class="btn btn-default">Edit</button></a>
		  		<a href="{{URL::route('sermon-delete',$sermon->srSlug)}}"  onclick="if(!confirm('Are you sure to delete this item?')){return false;};"><button type="button" class="btn btn-danger">Delete</button></a>
		  	</td>
		  </tr>
		@endforeach
    </table>
    {{$sermonsdata->links()}}
</div>
@stop