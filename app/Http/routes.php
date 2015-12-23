<?php


use Carbon\Carbon;

Route::get('/',     'LoginController@mpShowWelcome')->name('welcome');
Route::post('auth', 'LoginController@mpAuthenticateUser')->name('auth');

Route::post('ajax', 'AjaxController@mfCheckLogin');
//Routes that explicitly require authentification
Route::group(['middleware' => 'auth'], function () 
{
	Route::get('logout',   'LoginController@mpLogoutUser');

	Route::get('home',     'MainController@mpGetHome')->name('home');

	// Ponentes
	Route::get('ponentes', 'MainController@mpGetSpeakers');

	//Patrocinadores
	Route::get('empresas', 'MainController@mpGetOrganizersAndSponsors');

	//Plan de trabajo
	Route::get('plan',     'MainController@mpGetWorkPlan');

    //Polls
    Route::get('encuesta',          'PollController@mpGetPolls');
    Route::get('encuesta/publicar', 'PollController@mpRegisterPoll');
});




































Route::get('register', function()
{
    return view('myFooViews.fooLogin');
});

Route::get('foobar', function()
{
	$presentaciones = DB::table('Presentacion')->get();

	foreach($presentaciones as $presentacion)
	{
		$talkTime = Carbon::createFromFormat('Y-m-d H:i:s', $presentacion->hora);
		
		if ($presentacion->hora < Carbon::now())
		{
			$difference = Carbon::now()->subHours(Carbon::now()->diffInHours($talkTime))->diffForHumans();
			
			echo $presentacion->titulo.': '.$talkTime->format('H:i').' - Finished '.$difference;
		}
		else
		{
			if (Carbon::now()->diffInHours($talkTime) < 1)
			{
				$difference = Carbon::now()->addMinutes(Carbon::now()->diffInMinutes($talkTime))->diffForHumans();
			}
			else
			{
				$difference = Carbon::now()->addHours(Carbon::now()->diffInHours($talkTime))->diffForHumans();
			}

			echo $presentacion->titulo.': '.$talkTime->format('H:i').' - Beginning '.$difference;
		}
		echo '<br>';
	}

});

Route::post('register',  'LoginController@mpInsertUserIntoDB');
