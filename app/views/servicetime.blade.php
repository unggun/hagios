@extends('layout')

@section('content')

<div class="container-fluid full-width">
	    <div id="servicesCarousel" class="carousel slide" data-ride="carousel">
	    
	      <!-- Wrapper for slides -->
	      <div class="carousel-inner">
	      	
	      	@for ($i = 0; $i < 8; $i++)
	           @if ($i == 0)
	           <div class="item active">
	          	{{ HTML::image('images/st-'.$i.'.jpg') }}
		           <div class="carousel-caption">
		            <h1>Sunday Service</h1>
	           @else
	           <div class="item">
		          	{{ HTML::image('images/st-'.$i.'.jpg') }}
		            <div class="carousel-caption">
		            <h1>Hagios {{$routines[$i]->dvName}} Service</h1>
	           @endif
	            	<p>{{$routines[$i]->dvDay}} at {{$routines[$i]->dvTime}}.</p>
	          		</div>
	        </div><!-- End Item -->
	        @endfor
	 
	         
	                
	      </div><!-- End Carousel Inner -->


	    	<ul class="nav nav-pills nav-justified">
	          <li data-target="#servicesCarousel" data-slide-to="0" class="active"><a href="#">Sunday</a></li>
	          <li data-target="#servicesCarousel" data-slide-to="1"><a href="#">Elders</a></li>
	          <li data-target="#servicesCarousel" data-slide-to="2"><a href="#">Hagios Men</a></li>
	          <li data-target="#servicesCarousel" data-slide-to="3"><a href="#">Debora Women</a></li>
	          <li data-target="#servicesCarousel" data-slide-to="4"><a href="#">Hagios Youth</a></li>
	          <li data-target="#servicesCarousel" data-slide-to="5"><a href="#">Hagios Teens</a></li>
	          <li data-target="#servicesCarousel" data-slide-to="6"><a href="#">Hagios Kids</a></li>
	          <li data-target="#servicesCarousel" data-slide-to="7"><a href="#">Married Couples</a></li>
	        </ul>


	    </div><!-- End Carousel -->
	</div>

@stop