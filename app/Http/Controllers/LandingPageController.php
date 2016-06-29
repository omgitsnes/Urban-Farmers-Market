<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\User;

class LandingPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements = Advertisement::orderBy('available_on', 'desc')
        ->where('blocked', 0)
        ->where('available_until', '>', date("Y-m-d H:i:s"), 'or', NULL)
        ->take(8)
        ->get();

        $topSellers = User::orderBy('sells_count', 'desc')
            ->where('blocked', 0)
            ->take(10)
            ->get();

        $topBuyers = User::orderBy('buys_count', 'desc')
            ->where('blocked', 0)
            ->take(10)
            ->get();;

        return view('index', compact('advertisements', 'topSellers', 'topBuyers'));
    }
}
