<?php

namespace App\Http\Controllers;

use App\Conducteur;
use App\Proprietaire;
use App\Station;
use App\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        $references = $conducteur->references;
        return view('detaille',compact('vehicule','proprietaire','conducteur','station','references'));
    }

    public function qrcode($id){
            $vehicule = Vehicule::find($id);
            Image::make(QrCode::format('png', 'vehicule.png')->color(183,48,9)->size(320)->merge("/public/assets/logopnh.png",.3)->errorCorrection('H')->generate($vehicule->nummoteur))->save(public_path('vehicule.png'));

        return Response::download(public_path('vehicule.png'));
    }
}