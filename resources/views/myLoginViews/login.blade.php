@extends('myLayoutViews.master')

@section('styles')
<link rel="stylesheet" href="{{ URL::asset('css/edi/style-carousel.css') }}">
@stop

@section('content')

<div id="welcomeBlock" style="display:block; background-color:#000">
	<div class="carousel slide carousel-fade" id="carousel-ipade">
        <div class="carousel-inner">
            <div class="item active">
                <img alt="image" class="img-responsive" src="img/fotos/foto01.JPG">
            </div>
            <div class="item">
                <img alt="image"  class="img-responsive" src="img/fotos/foto02.JPG">
            </div>
            <div class="item ">
                <img alt="image" class="img-responsive" src="img/fotos/foto03.JPG">
            </div>
        </div>
    </div>


</div>

<div id="loginBlock" class="middle-box text-center loginscreen animated fadeInDown" style="display:none;">
	<div>
		<h1 class="logo-name" style="padding: 0 30px 0 30px">
			<img class="img-responsive img-circle" src="{{ URL::asset('img/logos/encuentro01.png') }}" alt="Segundo Encuentro de Alimentos y Bebidas">
		</h1>
		
		<div style="color: #FFF;">
			<h2>Segundo Encuentro de Alimentos y Bebidas</h2>

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

<script>	
	function mfValidateLogin()
    {
        var lMessageLog = new Array();

        lMessageLog[0] = mfValidate(0, 'Correo', $('#emailField'));
        lMessageLog[1] = mfValidate(1, 'Contraseña', $('#pwdField'), 'a');
        
        return mfGetErrorString(lMessageLog);
    }

    function mfShowLoginBlock()
    {
    	$('#welcomeBlock').css('display', 'none');
    	$('#loginBlock').css('display', 'block');
    }

	$(document).ready(function()
	{
		$('#welcomeBlock').click(function()
		{
    		$(this).fadeOut(500, function()
    		{
				mfShowLoginBlock();
    		});
		});

		$('#loginForm').submit(function(e)
		{
			if (mfValidateLogin())
			{
	        	e.preventDefault();
			}
		});

		$('.carousel').carousel({pause: "false", interval: 5000 });

		$('.carousel').css({'margin': 0, 'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
		$('.carousel .item').css({'position': 'fixed', 'width': '100%', 'height': '100%'});
		
		$('.carousel-inner div.item img').each(function() 
		{
			var imgSrc = $(this).attr('src');
			$(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
			$(this).remove();
		});

		$(window).on('resize', function() 
		{
			$('.carousel').css({'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
		});
	});
</script>
@stop