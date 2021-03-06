<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the user timeline.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('timeline');
    }
}
