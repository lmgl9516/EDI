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

	    // $patrocinadores = DB::table('Empresa')
	    // 				->get();

    	$organizadores = DB::table('Organizador')
	    				->join('Empresa', 'Empresa.idEmpresa', '=', 'Organizador.idEmpresa')
	    				->get();

	    $widthOrg = 4;		
		$widthPat = 6;

    	return view('myHomeViews.patrocinadores', compact('patrocinadores', 'organizadores', 'widthPat', 'widthOrg'));
    }
}
