@extends('layout')

@section('content')

<div id="pastorCarousel" class="full-screen carousel slide" data-ride="carousel">
	<div class="tri-container">
		<div class="wrap">
			<div class="crop" data-target="#pastorCarousel" data-slide-to="0"><a href="#">
				{{ HTML::image('images/pgem_nav.jpg') }}
			</a></div>
		</div>
		<div class="wrap">
			<div class="crop" data-target="#pastorCarousel" data-slide-to="1"><a href="#">
				<img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg">
			</a></div>
		</div>
		<div class="wrap">
			<div class="crop" data-target="#pastorCarousel" data-slide-to="2"><a href="#">
				<img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg">
			</a></div>
		</div>
		<div class="wrap">
			<div class="crop" data-target="#pastorCarousel" data-slide-to="3"><a href="#">
				<img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg">
			</a></div>
		</div>
		<div class="wrap">
			<div class="crop" data-target="#pastorCarousel" data-slide-to="4"><a href="#">
				<img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg">
			</a></div>
		</div>
	</div>

	<!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          {{ HTML::image('images/pgem_op.jpg') }}
           <div class="ps-content">
			<h1>Samuel & Neti Suwondo</h1>
			<p>Gembala Sidang GPdI Sosrowijayan Yogyakarta. Putra dari pendiri GPdI Sosrowijayan Pdt. Suwondo. Beliau menempuh ....</p>
		</div>
        </div><!-- End Item -->
 
         <div class="item">
          {{ HTML::image('images/pjimmy-op.jpg') }}
           <div class="ps-content">
			<h1>Pdt. Jimmy Irwanto</h1>
			<p>Ini adalah biografi dari pendeta .... untuk keterangan pada halaman website bagian our pastors</p>
		</div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="http://placehold.it/1200x400/dddddd/333333">
           <div class="ps-content">
			<h1>Pdt. .....</h1>
			<p>Menjadikan jemaat yang kudus dan tak bercacat cela sebagai tiang gereja dan terang dunia.</p>
		</div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="http://placehold.it/1200x400/999999/cccccc">
           <div class="ps-content">
			<h1>Pdt. ....</h1>
			<p>Menjadikan jemaat yang kudus dan tak bercacat cela sebagai tiang gereja dan terang dunia.</p>
		</div>
        </div><!-- End Item -->

        <div class="item">
          <img src="http://placehold.it/1200x400/999999/333333">
           <div class="ps-content">
			<h1>Pdt. .....</h1>
			<p>Menjadikan jemaat yang kudus dan tak bercacat cela sebagai tiang gereja dan terang dunia.</p>
		</div>
        </div><!-- End Item -->
                
      </div><!-- End Carousel Inner -->
</div>

@stop