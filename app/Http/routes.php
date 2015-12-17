<?php

Route::get('/',      'LoginController@mpShowWelcome')->name('welcome');

Route::post('auth',  'LoginController@mpAuthenticateUser')->name('auth');

Route::group(['middleware' => 'auth'], function () 
{
	Route::get('home',  'HomeController@mpShowHome')->name('home');
	Route::get('logout', 'LoginController@mpLogoutUser');
});



Route::get('foo', function()
{
    return view('myFooViews.fooLogin');
});
