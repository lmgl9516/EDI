@extends('myLayoutViews.master')

@section('styles')
@stop

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
	<div>
		<h1 class="logo-name" style="padding: 0 30px 0 30px">
			<img class="img-responsive img-circle" src="{{ URL::asset('img/logos/encuentro01.png') }}" alt="Segundo Encuentro de Alimentos y Bebidas">
		</h1>
		
		<div style="color: #FFF;">
			<h2>Segundo Encuentro <br> Sector Alimentos y Bebidas</h2>
			<h3>Innovación para un mercado global</h3>

			<form style="color: #676a6c;" id="loginForm" class="m-t" method="POST" action="{{URL::action('LoginController@mpInsertUserIntoDB')}}">{{csrf_field()}}
				<div class="form-group">
					<input id="emailField" type="text" class="form-control" placeholder="Correo" name="email">
				</div>
				<div class="form-group">
					<input id="pwdField" type="text" class="form-control" placeholder="Contraseña" name="password">
				</div>
				<button type="submit" class="btn btn-ipade block full-width m-b">Inscribir </button>
			</form>
			<p class="m-t"> <small>IPADE - Universidad Panamericana &copy; 2016</small> </p>
		</div>
	</div>
</div>
@stop