@extends('myLayoutViews.master')

@section('styles')
<style>
.iframe iframe
{
	position: absolute;
	top: 0;
	left: 0;
	display: block;
}
@media (min-width: 320px) {

  .iframe iframe{
    width: 100%;
    height: 600px;
  } 

}

/* CSS pantalla 768px o superior */
@media (min-width: 768px) {

  .iframe iframe{
    width: 100%;
    height: 890px;
  } 

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
			<h2 style="font-weight: 500">ENCUESTA</h2>
		</div>
	</div>
	<div class="row animated fadeInRight">
		<div class="col-lg-12">
			<div class = "iframe">
				<iframe src="https://www.polleverywhere.com/" width="1920" height="1080" frameborder="0" allowfullscreen>
					<p>Your browser does not support iframes.</p>
				</iframe>
			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')
@stop