<?php

namespace App\Http\Controllers;

use App\Conducteur;
use App\Proprietaire;
use App\Station;
use App\Vehicule;
use Endroid\QrCode\QrCode;
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
        $conducteur = Conducteur::where('vehicule_id', $vehicule->id)->first();
        $station = Station::find($conducteur->station_id);
        return view('detaille',compact('vehicule','proprietaire','conducteur','station'));
    }

    public function qrcode($id){

    }
}