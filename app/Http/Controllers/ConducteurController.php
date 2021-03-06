<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Conducteur;
use App\Reference;
use App\Station;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ConducteurController extends Controller
{
    public function index()
    {
        $conducteurs = Conducteur::orderBy('updated_at','desc')->get();
        $communes = Commune::orderBy('name','asc')->get();
        return view('conducteur',compact('conducteurs','communes'));
    }

    public function save(Request $request){
        $this->validate($request,[
           'picture' => 'required',
            'name' => 'required',
            'prenom' => 'required',
            'birthdate' => 'required',
            'lnaissance' => 'required',
            'sex' => 'required',
            'cin' => 'required',
            'nif' => 'required',
            'permis' => 'required',
            'ed' => 'required',
            'eg' => 'required',
            'tel' => 'required',
            'adresse' => 'required',
            'prorietaire' => 'required'
        ]);

        $conducteur = Conducteur::where('nif',$request->nif)->first();
        if(!$conducteur){
            $conducteur = new Conducteur();
            if($request->hasFile('picture')){
                $image = $request->file('picture');
                $filename = time()."-".$request->nid.".".$image->getClientOriginalExtension();
                $image_normal = Image::make($image);
                Storage::disk('local')->put('conducteur/'.$filename,(string)$image_normal,'public');
                $conducteur->photo = $filename;
            }
            if($request->hasFile('eg')){
                $image = $request->file('eg');
                $filename = time()."-".$request->nid.".".$image->getClientOriginalExtension();
                $image_normal = Image::make($image);
                Storage::disk('local')->put('empreinte/'.$filename,(string)$image_normal,'public');
                $conducteur->photo = $filename;
                $conducteur->empreint_gauche = $filename;
            }
            if($request->hasFile('ed')){
                $image = $request->file('ed');
                $filename = time()."-".$request->nid.".".$image->getClientOriginalExtension();
                Storage::disk('local')->put('empreinte/'.$filename,(string)$image_normal,'public');
                $conducteur->photo = $filename;
                $conducteur->empreinte_droite = $filename;
            }
            $conducteur->nom = $request->name;
            $conducteur->prenom = $request->prenom;
            $conducteur->datenaissance =new Carbon($request->birthdate);
            $conducteur->lieunaissance = $request->lnaissance;
            $conducteur->sexe = $request->sex;
            $conducteur->cin = $request->cin;
            $conducteur->permisconduire = $request->permis;
            $conducteur->telephone = $request->tel;
            $conducteur->proprietaire_id = $request->prorietaire;
            $conducteur->commune_id = $request->commune;
            $conducteur->nif = $request->nif;
            $conducteur->save();

            $reference1 = Reference::find($request->reference1);
            $reference2 = Reference::find($request->reference2);

            $conducteur->references()->attach($reference1);
            $conducteur->references()->attach($reference2);
            return redirect()->route('conducteur');
        }
    }
    public function detail($id)
    {
        $stations = Station::find($id);
        $conducteurs  = Conducteur::where('station_id', $stations->id)->get();
        return view('conducteur-details',compact('stations','conducteurs'));
    }
}
