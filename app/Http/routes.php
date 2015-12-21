<?php

Route::get('/',      'LoginController@mpShowWelcome')->name('welcome');

Route::post('auth',  'LoginController@mpAuthenticateUser')->name('auth');

Route::group(['middleware' => 'auth'], function () 
{
	Route::get('home',   'HomeController@mpShowHome')->name('home');
	Route::get('logout', 'LoginController@mpLogoutUser');

	// Ponentes
	Route::get('ponentes', 'PonenteController@mpGetAllPonentes');

	//Patrocinadores
	Route::get('patrocinadores', 'PatrocinioController@mpGetAllPatrocinadores');

	//Plan de trabajo
	Route::get('plan', 'TrabajoController@mpGetPlanDeTrabajo');
});



Route::get('register', function()
{
    return view('myFooViews.fooLogin');
});

Route::get('foobar', function()
{
    return view('myFooViews.foobar');
});

Route::post('register',  'LoginController@mpInsertUserIntoDB');


