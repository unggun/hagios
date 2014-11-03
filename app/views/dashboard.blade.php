@extends('admin-layout')

@section('content')
<div id="dashboard" class="container">
	{{ HTML::image('images/logo-dashboard.png', 'logo') }}
	<h2>Shalom, Nama Admin!</h2>
	<p>Silahkan pilih menu di samping kiri untuk memulai.</p>
	<script type="text/javascript">
		document.write("<iframe src=\"http://www.kingjamesbibleonline.org/popular-bible-verses-widget.php\" style=\"font-family:'Open Sans'; width: 200px; height: 140px; border: 0px solid #ffffff;\"></iframe>");
	</script>
</div>
@stop