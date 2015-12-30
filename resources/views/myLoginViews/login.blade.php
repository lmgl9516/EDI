<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- important -->
        <meta name="_token" content="{!! csrf_token() !!}"/>

        <title>Segundo Encuentro Sector Alimentos y Bebidas</title>
        
        <!-- App icon-->
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/logos/encuentro-favicon.png') }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}">
        <!-- font awesome -->
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome/font-awesome.css') }}">
        <!-- animations -->
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
        <!-- Sweet Alert -->
        <link rel="stylesheet" href="{{ URL::asset('css/sweetalert/sweetalert.css') }}">

        <!-- EDI login -->
        <link rel="stylesheet" href="{{ URL::asset('css/edi/style-login.css') }}">
        <!-- EDI master -->
        <link rel="stylesheet" href="{{ URL::asset('css/edi/style-master.css') }}">
    </head>

    <body id="welcome-body">
        <div id="welcomeBlock" style="display:block;" onclick="mpShowLoginBlock();">
        	
        	<div class="overlay black-veil"></div>

        	<div class="overlay text-left">
        		<div class="vertical-parent">
        	     	<div class="vertical-child">
        	     		<div class="col-lg-2 col-md-2 col-sm-1 col-xs-1"></div>
        	     		<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10 animated fadeInLeft">
        					
        					<h1>SEGUNDO ENCUENTRO SECTOR <b> ALIMENTOS Y BEBIDAS </b></h1>
        					<h3>Click para continuar</h3>
        					<br>
        					<br>
        					
        					<div id="logos-banner">
        		     			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        							<img alt="image" class="img-responsive ipade-banner" src="img/logos/empresas/ipade-white.png">
        						</div>
        		     			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        							<img alt="image" class="img-responsive iese-banner" src="img/logos/empresas/iese-white.png">
        						</div>
        		     			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        							<img alt="image" class="img-responsive gs1-banner" src="img/logos/empresas/gs1-white.png">
        						</div>
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

        <div id="loginBlock" class="animated fadeInDown" style="display:none;">
        	<div id="middleBlock" class="text-center">
        		<div id="formLogo">
        			<img class="img-responsive img-circle" src="{{ URL::asset('img/logos/encuentro.png') }}" alt="Segundo Encuentro de Alimentos y Bebidas">
        		</div>

        		<div class="row" id="formHeader">
        			<p id="headerTitle">SEGUNDO ENCUENTRO <br> SECTOR <b> ALIMENTOS <br> Y BEBIDAS </b></p>
        			<p id="headerSubtitle">INNOVACIÓN para un mercado global</p>
        		</div>

        		<form id="loginForm" method="POST" novalidate>
        			{{csrf_field()}}
        			<div class="form-group">
        				<input id="emailField" type="email" class="form-control" placeholder="Correo" name="email">
        			</div>
        			<div class="form-group">
        				<input id="pwdField" type="password" class="form-control" placeholder="Contraseña" name="password">
        			</div>
        			<input id="loginButton" type="submit" class="btn btn-ipade" value="Iniciar sesión">
        		</form>
        		
        		<div class="row" id="formFooter">
        			<span> <small>IPADE - Universidad Panamericana &copy; 2016</small> </span>
        		</div>
        	</div>
        </div>
    </body>

    <!-- AJAX 1.11.2 CDN-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- jQuery-->
    <script src="{{ URL::asset('js/jquery/jquery-2.1.1.js') }}"></script>
    <!-- Bootstrap-->
    <script src="{{ URL::asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Sweet alert -->
    <script src="{{ URL::asset('js/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Sweet alert manager -->
    <script src="{{ URL::asset('js/edi/swalManager.js') }}"></script>
    <!-- important -->
    <script type="text/javascript">
        $.ajaxSetup
        ({
           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
    </script>

    <!-- login scripts -->
    <script>
    	function mpShowLoginBlock()
    	{
    		$('#welcomeBlock').fadeOut(1000, function()
    		{
    			$(this).css('display', 'none');
    			$('#loginBlock').css('display', 'block');
    		});
    	}

    	$(document).ready(function()
    	{
    		$('#loginForm').submit(function(e)
    		{
    			e.preventDefault();

    			$.ajax
    			({
    				url:  "{{ URL::action('LoginController@mpAuthenticateUser')}}",
    				type: "POST",
    				data: {loginData: $('#loginForm').serialize()},
    				success: function(response)
    				{
    					if (response['url'])
    						window.location = response['url'];						
    					else
    						mpSwalConfirmError(response['title'], response['text'], 'Continuar');
    				},
    				error: function(xhr)
    				{
    					mpSwalError('Oops, something went wrong.', 'Ajax error');
    				}
    			})
    		});

    		$('.carousel').carousel({pause: "false", interval: 4000 });

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
</html>