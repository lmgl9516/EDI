<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class MainController extends Controller
{
    public function mpGetHome()
    {
    	return view('myHomeViews.home');
    }

    /* ---------------------------------- *
     * ---------------------------------- *
     * ------------ EMPRESAS ------------ *
     * ---------------------------------- *
     * ---------------------------------- */
    public function mpGetOrganizersAndSponsors()
    {
    	$patrocinadores = DB::table('Patrocinador')
	    				->join('Empresa', 'Empresa.idEmpresa', '=', 'Patrocinador.idEmpresa')
	    				->get();

    	$organizadores = DB::table('Organizador')
	    				->join('Empresa', 'Empresa.idEmpresa', '=', 'Organizador.idEmpresa')
	    				->get();

	    $widthOrg = 4;		
		$widthPat = 6;

    	return view('myHomeViews.patrocinadores', compact('patrocinadores', 'organizadores', 'widthPat', 'widthOrg'));
    }

    /* ---------------------------------- *
     * ---------------------------------- *
     * ------------ PONENTES ------------ *
     * ---------------------------------- *
     * ---------------------------------- */
    public function mpGetAllSpeakers()
    {
    	$ponentes = DB::table('Ponente')->get();

    	return view('myHomeViews.ponentes', compact('ponentes'));
    }

    /* ---------------------------------- *
     * ---------------------------------- *
     * ---------- PLAN TRABAJO ---------- *
     * ---------------------------------- *
     * ---------------------------------- */
	public function mpGetWorkPlan()
	{
    	return view('myHomeViews.plan-trabajo');
	}
}
