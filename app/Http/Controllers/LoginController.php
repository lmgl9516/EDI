<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Guard; 

use App\User;
use DB;
use Hash;
use Auth;

class LoginController extends Controller
{
    public function mpShowWelcome()
    {
    	return view('myLoginViews.login');
    }

    public function mpLogoutUser()
    {
    	//logout user and redirect to login view
    	Auth::logout();
        return redirect()->route('welcome');
    }

    public function mpInsertUserIntoDB(Request $loginForm)
    {
    	//look for incoming data in db
    	$dbUser = User::where('email', '=', $loginForm->email)->first();

    	//check if user exists
    	if (!$dbUser)
    	{
    		//user does not exist in db, create new user with incoming data
    		$dbUser = User::create(['email' => $loginForm->email, 'password' => Hash::make($loginForm->password)]);
    	}
        
        return redirect('/borsh');
    }

    public function mpAuthenticateUser(Request $loginForm)
    {
    	//try login
    	if (Auth::attempt(['email' => $loginForm->email, 'password' => $loginForm->password]))
    	{
    		//Authentication passed...
    		return redirect()->route('home');
    	}
    	else
    	{
    		dd('failed auth');
    	}
    }
}
