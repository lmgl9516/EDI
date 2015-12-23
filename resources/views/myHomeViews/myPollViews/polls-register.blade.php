
@extends('myLayoutViews.master')

@section('styles')
<style>
.ibox-content
{
	height: 100px;
	width: 100%;
	background-color: #8A2F88;
	color: #fff;
	border-style: none;
}
.help-block
{
	color: #fff;
	margin-right: 0px;
}
.btn-ipade
{
	height: 75px;
}
.form-control
{
	color: #000000;
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
			<h2 style="font-weight: 500">REGISTRAR NUEVA ENCUESTA</h2>
		</div>
	</div>
	<div class="row animated fadeInRight">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">

			<div class="form-group">
				<div class="col-sm-10">
					<input type="text" class="form-control"> 
					<span class="help-block m-b-none">Pegar la dirección URL de la encuesta que se desea publicar.</span>
				</div>
				<button class="col-sm-2 btn btn-sm btn-ipade pull-right m-t-n-xs"><strong>Registrar</strong></button>
			</div>
		</div>
	</div>
</div>
@stop
@section('scripts')
<script src="{{ URL::asset('js/edi/script-sidebar.js') }}"></script>
@stop



