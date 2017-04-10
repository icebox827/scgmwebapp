<?php

namespace App\Http\Controllers;

use App\Proprietaire;
use App\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
    {
        $vehicules = Vehicule::orderBy('updated_at','desc')->get();
        return view('vehicule',compact('vehicules'));
    }

    public function details($id)
    {
        $vehicule = Vehicule::find($id);
        $proprietaire = Proprietaire::find($vehicule->proprietaire_id);
        return view('detaille',compact('vehicule','proprietaire'));
    }
}