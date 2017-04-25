<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Conducteur;
use App\Proprietaire;
use App\Station;
use App\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use Intervention\Image\Imagick\Font;
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

    public function generate(){
        $commune = Commune::where('name', 'LIKE', 'Delmas')->first();
        $stations = Station::where('commune_id',$commune->id)->get();
        foreach ($stations as $s){
            $conducteurs = Conducteur::where('station_id',$s->id)->get();
            foreach ($conducteurs as $c){
                $currentQr=  Image::make(QrCode::format('png', 'image.png')->color(183,48,9)->size(320)->merge("/public/assets/logopnh.png",.3)->errorCorrection('H')->generate($c->vehicule->nummoteur))->save(public_path('vehicule.png'));
                $currentQr->text($c->vehicule->immatriculation, 110, 300,function ($font){
                    $font->file(resource_path('assets/fonts/Roboto-Regular.ttf'));
                    $font->size(20);

                });
                $currentQr->save(public_path('qrcode/'.$c->vehicule->nummoteur.".png"));
            }
        }



    }
}