<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index(){
        $stations = Station::orderBy('station')->get();
        return view('station',compact('stations'));
    }

}
