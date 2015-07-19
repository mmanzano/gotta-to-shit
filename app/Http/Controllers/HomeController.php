<?php

namespace ShitGuide\Http\Controllers;

use ShitGuide\Entities\Place;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's principal screen.
    |
    */

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $places = Place::all();

        return view('home', compact('places'));
    }
}