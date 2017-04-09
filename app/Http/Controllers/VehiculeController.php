<?php

namespace App\Http\Controllers;

use App\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
    {
        $vehicules = Vehicule::orderBy('updated_at','desc')->get();
        return view('vehicule',compact('vehicules'));
    }
}