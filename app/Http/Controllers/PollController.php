<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PollController extends Controller
{
    public function mpGetAllPolls()
    {
    	return view('myHomeViews.myPollViews.polls');
    }

    public function mpRegisterPoll()
    {
    	return view('myHomeViews.myPollViews.polls-register');
    }
}
