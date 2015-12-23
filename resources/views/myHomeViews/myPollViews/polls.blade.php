@extends('myLayoutViews.master')

@section('styles')
<style>
.iframe
{
	position: relative;
	padding-bottom: 56.25%;
	overflow: hidden;
}

.iframe iframe 
{
	position: absolute;
	display: block;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
</style>
<link rel="stylesheet" href="{{ URL::asset('css/edi/style-patrocinadores.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/edi/style-navbar.css') }}">
@stop

@section('content')
@include('myIncludeViews.sidebar')
<div style="padding: 0 15px">
	<div class="row wrapper page-heading" style="padding-left: 0px">
		<div id="title-head" class="col-lg-3" style="box-shadow: 0px 5px 10px rgba(0,0,0,0.5);">
			<h2 style="font-weight: 500">Retroalimentacion</h2>
		</div>
	</div>
	<div class="row animated fadeInRight">
		<div class="col-lg-12">
			<div class = "iframe">
				<iframe src="http://www.up.edu.mx/es" width="640" height="360" frameborder="0" allowfullscreen>
					<p>Your browser does not support iframes.</p>
				</iframe>
			</div>
		</div>
	</div>
</div>
@stop
@section('scripts')
<script src="{{ URL::asset('js/edi/script-sidebar.js') }}"></script>
@stop



