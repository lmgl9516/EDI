<?php

namespace App\Http\Controllers;

use Request;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use DB;
use Hash;
use Auth;

use App\ValidationManager;

class LoginController extends Controller
{
    public function mpShowWelcome()
    {
        if (Auth::user())
            return redirect()->route('home');

    	return view('myLoginViews.login');
    }

    public function mpLogoutUser()
    {
    	//logout user and redirect to login view
    	Auth::logout();
        return redirect()->route('welcome');
    }

    public function mpAuthenticateUser()
    {
        if (Request::ajax())
        {
            parse_str(Input::get('loginData'), $login);
            
            $lMessageLog = array( ValidationManager::mfValidate(0, 'Correo',     $login['email'],    'o'),
                                  ValidationManager::mfValidate(1, 'Contraseña', $login['password'], 'a'));

            $lErrorString  = ValidationManager::mfGetErrorString($lMessageLog);

            if ($lErrorString)
            {
                //return validation errors for swal
                return array('title' => 'Validación no exitosa', 'text' => $lErrorString, 'url' => null);
            }

            //try login
            if (Auth::attempt(['email' => $login['email'], 'password' => $login['password']]))
            {
                //Authentication passed...
                return array('url' => url('home'));
            }
            else
            {
                //return failure error for swal
                return array('title' => 'Acceso denegado', 'text' => 'Correo o contraseña no autorizados.'."\n\n".'Verifique sus datos e inténtelo nuevamente.', 'url' => null);
            }
        }   
    }
}
