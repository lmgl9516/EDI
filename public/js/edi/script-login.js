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
