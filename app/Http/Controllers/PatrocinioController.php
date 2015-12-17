<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class PatrocinioController extends Controller
{
    public function mpGetAllPatrocinadores()
    {
    	$patrocinadores = DB::table('Patrocinio')
	    				->join('Empresa', 'Empresa.idEmpresa', '=', 'Patrocinio.idEmpresa')
	    				->get();

	    // dd($patrocinadores);

    	return view('myHomeViews.patrocinadores', compact('patrocinadores'));
    }
}
