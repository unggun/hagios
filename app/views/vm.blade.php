@extends('layout')

@section('content')

<div class="bcg full-screen" style="background-image: url({{ URL::asset('images/vision.png') }})">
		<div class="vm-content">
			<h1>VISI</h1>
			<p>Mempersiapkan jemaat Tuhan yang kudus dan tak bercacat cela sebagai tiang gereja dan terang dunia.</p>
		</div>
	</div>

	<div class="bcg full-screen" style="background-image: url({{ URL::asset('images/mission.png') }})">
		<div class="vm-content">
			<h1>MISI</h1>
				<ul>
					<li>Jemaat yang menginjil</li>
					<li>Jemaat yang menyembah</li>
					<li>Jemaat yang memuridkan</li>
					<li>Jemaat yang memperhatikan</li>
					<li>Jemaat yang memberi</li>
					<li>Jemaat yang berdoa</li>
				</ul>
		</div>
	</div>

@stop