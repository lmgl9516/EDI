@extends('myLayoutViews.master')

@section('styles')
@stop

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
	<div>
		<div>
			<h1 class="logo-name">EDI</h1>
		</div>
		
		<div style="color: #FFF;">
			<h2>Segundo Encuentro de Alimentos y Bebidas</h2>

			<form id="loginForm" class="m-t" method="POST" action="{{URL::action('LoginController@mpAuthenticateUser')}}">{{csrf_field()}}
				<div class="form-group">
					<input id="emailField" type="text" class="form-control" placeholder="Correo" name="email">
				</div>
				<div class="form-group">
					<input id="pwdField" type="password" class="form-control" placeholder="Contraseña" name="password">
				</div>
				<button type="submit" class="btn btn-ipade block full-width m-b">Login</button>
			</form>
			<p class="m-t"> <small>IPADE - Universidad Panamericana &copy; 2016</small> </p>
		</div>
	</div>
</div>
@stop

@section('scripts')
<script src="{{ URL::asset('js/edi/script-validation.js') }}"></script>

<script>	
	function mfValidateLogin()
    {
        var lMessageLog = new Array();

        lMessageLog[0] = mfValidate(0, 'Correo', $('#emailField'));
        lMessageLog[1] = mfValidate(1, 'Contraseña', $('#pwdField'), 'a');
        
        return mfGetErrorString(lMessageLog);
    }

	$(document).ready(function()
	{
		$('#loginForm').submit(function(e)
		{
			if (mfValidateLogin())
	        	e.preventDefault();
		});
	});
</script>
@stop