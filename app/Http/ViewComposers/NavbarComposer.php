<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use DB;
use Carbon\Carbon;

class NavbarComposer
{
    public function compose(View $view)
    {
        $presentaciones = DB::table('Presentacion')->get();
        $miniPlan = array();

        foreach($presentaciones as $presentacion)
        {
        	$talkTime = Carbon::createFromFormat('Y-m-d H:i:s', $presentacion->hora);
        	
        	if ($presentacion->hora > Carbon::now())
        	{
        		$miniPlan[] = ['titulo' => $presentacion->titulo, 'hora' => $talkTime->format('H:i')];
        	}
        }

        $view->with('miniPlan', $miniPlan);
    }
}