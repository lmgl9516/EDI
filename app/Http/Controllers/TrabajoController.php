<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class TrabajoController extends Controller
{
	public function mpGetPlanDeTrabajo()
	{
    	return view('myHomeViews.plan-trabajo');
	}
}
