@extends('myLayoutViews.master')

@section('styles')
<link rel="stylesheet" href="{{ URL::asset('css/edi/style-carousel.css') }}">
@stop

@section('content')

<div id="welcomeBlock" style="display:block; background-color:#000">
	
	<!-- <div class="overlay black-veil"></div> -->

	<div class="overlay text-left">
		<div class="vertical-parent">
	     	<div class="vertical-child">
	     		<div class="col-lg-2 col-md-2 col-sm-1 col-xs-1"></div>
	     		<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
					<img class="img-responsive" src="{{ URL::asset('img/logos/encuentro-wide.png') }}" alt="Segundo Encuentro de Alimentos y Bebidas">

		     		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img class="img-responsive" src="{{ URL::asset('img/logos/ipade.png') }}" alt="IPADE Business School">
		     		</div>
		     		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img class="img-responsive" src="{{ URL::asset('img/logos/iese.png') }}" alt="IESE">
		     		</div>
		     		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img class="img-responsive" src="{{ URL::asset('img/logos/gs1.png') }}" alt="GS1">
		     		</div>
	     		</div>
	     		<div class="col-lg-2 col-md-2 col-sm-1 col-xs-1"></div>
	     	</div>
	   	</div>	
	</div>

	<div class="carousel slide carousel-fade" id="carousel-ipade">
        <div class="carousel-inner">
            <div class="item active">
                <img alt="image" class="img-responsive" src="img/fotos/foto06.JPG">
            </div>
            <div class="item">
                <img alt="image" class="img-responsive" src="img/fotos/foto02.JPG">
            </div>
            <div class="item">
                <img alt="image" class="img-responsive" src="img/fotos/foto03.JPG">
            </div>
        </div>
    </div>
</div>

<div id="loginBlock" class="middle-box text-center loginscreen animated fadeInDown" style="display:none;">
	<div>
		<h1 class="logo-name" style="padding: 0 30px 0 30px">
			<img class="img-responsive img-circle" src="{{ URL::asset('img/logos/encuentro.png') }}" alt="Segundo Encuentro de Alimentos y Bebidas">
		</h1>
		
		<div style="color: #FFF;">
			<h2>Segundo Encuentro <br> Sector Alimentos y Bebidas</h2>
			<h3>Innovación para un mercado global</h3>

			<form style="color: #676a6c;" id="loginForm" class="m-t" method="POST" action="{{URL::action('LoginController@mpAuthenticateUser')}}">{{csrf_field()}}
				<div class="form-group">
					<input id="emailField" type="text" class="form-control" placeholder="Correo" name="email">
				</div>
				<div class="form-group">
					<input id="pwdField" type="password" class="form-control" placeholder="Contraseña" name="password">
				</div>
				<button type="submit" class="btn btn-ipade block full-width m-b">Iniciar sesión </button>
			</form>
			<p class="m-t"> <small>IPADE - Universidad Panamericana &copy; 2016</small> </p>
		</div>
	</div>
</div>
@stop

@section('scripts')
<script src="{{ URL::asset('js/edi/script-validation.js') }}"></script>
<script src="{{ URL::asset('js/edi/script-login.js') }}"></script>
<script>
	$(document).ready(function()
	{
		$('html').css('overflow-x', 'hidden');
		$('body').css('overflow-x', 'hidden');
	});
</script>
@stop