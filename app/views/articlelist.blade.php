@extends('admin-layout')

@section('content')
<div class="container post-list">
	@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
	<h2>Daftar Artikel</h2>
	<table class="table table-stripped table-hover">
		<tr>
			<th>#</th>
			<th>Judul</th>
			<th>Divisi</th>
			<th>Posted by</th>
			<th>Update Terakhir</th>
			<th>Updated by</th>
			<th>Edit/Delete</th>
		</tr>

		<?php $count = 0; ?>
		@foreach($articlesdata as $article)
		<?php $count++; ?>
		  <tr>
		  	<td>{{$count}}</td>
		  	<td>{{$article->aTitle}}</td>
		  	<td>{{$divisionName[$article->aType]}}</td>
		  	<td>{{$article->aUserName}}</td>
		  	<td>{{$article->updated_at}}</td>
		  	<td>{{$article->aUpdated_by}}</td>
		  	<td>
		  		<a href="{{URL::route('article-edit',$article->aSlug)}}"><button type="button" class="btn btn-default">Edit</button></a>
		  		<a href="{{URL::route('article-delete',$article->aSlug)}}"  onclick="if(!confirm('Are you sure to delete this item?')){return false;};"><button type="button" class="btn btn-danger">Delete</button></a>
		  	</td>
		  </tr>
		@endforeach
    </table>
    {{$articlesdata->links()}}
</div>
@stop