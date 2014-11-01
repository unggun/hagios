@extends('layout')

@section('content')
 <section class="container">

    @foreach($schedulesdata as $schedule)
      <div>
      	<h2>{{$schedule->sSvId}}</h2>
      	<h5>Pembicara: {{$schedule->sSpeaker}}</h5>
      	<p>{{$schedule->sTime}}</p>
      </div>
    @endforeach
    </section>
@stop