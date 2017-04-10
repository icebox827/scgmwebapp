<?php

namespace App\Http\Controllers;

use App\Conducteur;
use App\Proprietaire;
use App\Station;
use App\Vehicule;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $v = Vehicule::all()->count();
        $p = Proprietaire::all()->count();
        $c = Conducteur::all()->count();
        $s = Station::all()->count();
        $vehicule = Vehicule::orderBy('created_at','desc')->take(10)->get();
        return view('home',compact('v','p','c','s','vehicule'));
    }


}
