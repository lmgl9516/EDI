<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class PonenteController extends Controller
{
    public function mpGetAllPonentes()
    {
    	$ponentes = DB::table('Ponente')->get();

	    // dd($ponentes);

    	return view('myHomeViews.ponentes', compact('ponentes'));
    }
}
