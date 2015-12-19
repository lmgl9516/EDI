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



Route::get('borsh', function()
{
    return view('myFooViews.fooLogin');
});
Route::post('register',  'LoginController@mpInsertUserIntoDB');


