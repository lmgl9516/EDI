<?php

namespace App\Http\Controllers;

use Request;
use Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function mfCheckLogin()
    {
    	if (Request::ajax())
    	{
            parse_str(Input::get('data'), $result); 
    		return $result;
    	}
    }
}
