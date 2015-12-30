<?php

use Carbon\Carbon;

Route::get('/',     'LoginController@mpShowWelcome')->name('welcome');
Route::post('auth', 'LoginController@mpAuthenticateUser')->name('auth');

// Routes that explicitly require authentification
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
