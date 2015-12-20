@extends('myLayoutViews.master')

@section('styles')
<link rel="stylesheet" href="{{ URL::asset('css/edi/style-carousel.css') }}">
<style>
	@media all and (max-width: 767px) and (min-width: 401px) {
	  .iese-banner
	  {
	    padding: 20px 80px;
	  }
	  .gs1-banner
	  {
	    padding: 20px 100px;
	  }
	}
	@media all and (max-width: 400px) and (min-width: 1px) {
	  .iese-banner
	  {
	    padding: 20px 80px;
	  }
	  .gs1-banner
	  {
	    padding: 20px 100px;
	  }
	}
</style>
@stop

@section('content')
<div id="welcomeBlock" style="display:block; background-color:#000">
	
	<div class="overlay black-veil"></div>

	<div class="overlay text-left">
		<div class="vertical-parent">
	     	<div class="vertical-child">
	     		<div class="col-lg-2 col-md-2 col-sm-1 col-xs-1"></div>
	     		<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
					
					<h1>SEGUNDO ENCUENTRO SECTOR <b> ALIMENTOS Y BEBIDAS </b></h1>
					<h3>Click para continuar</h3>
					<br>
					<br>

	     			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<img alt="image" class="img-responsive" src="img/logos/empresas/ipade-white.png">
					</div>
	     			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<img alt="image" class="img-responsive iese-banner" src="img/logos/empresas/iese-white.png">
					</div>
	     			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<img alt="image" class="img-responsive gs1-banner" src="img/logos/empresas/gs1-white.png">
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
			<img class="img-responsive img-circle" src="{{ URL::asset('img/logos/encuentro.png') }}" alt="Segundo Encuentro de Alimentos y Bebidas" style="box-shadow: 0px 5px 10px rgba(0,0,0,0.5);}">
		</h1>
		
		<div style="color: #FFF;">
			<h2>SEGUNDO ENCUENTRO <br> SECTOR <b> ALIMENTOS <br> Y BEBIDAS </b></h2>
			<h3>INNOVACIÓN para un mercado global</h3>

			<form style="color: #676a6c;" id="loginForm" class="m-t" method="POST" action="{{URL::action('LoginController@mpAuthenticateUser')}}">{{csrf_field()}}
				<div class="form-group">
					<input id="emailField" type="text" class="form-control" placeholder="Correo" name="email" onkeyup="this.value=this.value.toLowerCase()">
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
<script src="{{ URL::asset('js/edi/script-login.js') }}"></script>e

@stop