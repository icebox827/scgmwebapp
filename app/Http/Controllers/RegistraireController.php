<?php

namespace App\Http\Controllers;

use App\Conducteur;
use App\Proprietaire;
use App\Reference;
use App\Station;
use App\Vehicule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegistraireController extends Controller
{
    public function index(){
        $stations = Station::orderBy('codestation','asc')->get();
        return view('registraire',compact('stations'));
    }
    public function save(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'prenom'=>'requuired',
            'birthdate'=>'required',
            'lnaissance'=>'required',
            'sex'=>'required',
            'cin'=>'required',
            'nif'=>'required',
            'permis'=>'required',
            'empreinted'=>'required',
            'empreinteg'=>'required',
            'tel'=>'required',
            'adresse'=>'required',
            'namep'=>'required',
            'prenomp'=>'required',
            'birthdatep'=>'required',
            'lnaissancep'=>'required',
            'sexp'=>'required',
            'cinp'=>'required',
            'nifp' => 'required',
            'permisp'=>'required',
            'telp'=>'required',
            'adressep'=>'required',
            'marque'=>'required',
            'modele'=>'required',
            'annee'=>'required',
            'couleur'=>'required',
            'immatriculation'=>'required',
            'puissance'=>'required',
            'numeromoteur'=>'required',
            'numeroserie'=>'required',
            'namer'=>'required',
            'prenomr'=>'required',
            'adresser'=>'required',
            'telr'=>'required',
            'namere'=>'required',
            'prenomre'=>'required',
            'adressere'=>'required',
            'telre'=>'required',

        ]);

        $proprietaire = Proprietaire::where('nif', $request['nifp'])->first();
            if(!$proprietaire){
                $proprietaire = new Proprietaire();
                $proprietaire->nom = $request->namep;
                $proprietaire->prenom = $request->prenomp;
                $proprietaire->datenaissance = new Carbon($proprietaire->birthdatep);
                $proprietaire->sexe = $request->sexp;
                $proprietaire->cin = $request->cinp;
                $proprietaire->nif = $request->nifp;
                $proprietaire->permisconduire = $request->permisp;
                $proprietaire->telephone = $request->telephone;
                $proprietaire->adressep = $request->adressep;
                $proprietaire->save();
        }
        $vehicule = Vehicule::where('nummoteur',$request->numeromoteur)->first();
            if(!$vehicule){
                $vehicule = new Vehicule();
                $vehicule->nummoteur = $request->numeromoteur;
                $vehicule->numserie = $request->numeroserie;
                $vehicule->marque = $request->marque;
                $vehicule->modele = $request->modele;
                $vehicule->annee = $request->annee;
                $vehicule->couleur = $request->couleur;
                $vehicule->immatriculation = $request->immatriculation;
                $vehicule->puissance = $request->puissance;
                $vehicule->proprietaire_id = $proprietaire->id;
            }
        $conducteur = Conducteur::where('nif', $request->nif)->first();
            if(!$conducteur){
                $conducteur = new Conducteur();
                $conducteur->nif = $request->nif;
                $conducteur->nom = $request->name;
                $conducteur->datenaissance = new Carbon($request->birthdate);
                $conducteur->lieunaissance = $request->lnaissance;
                $conducteur->sexe = $request->sex;
                $conducteur->cin = $request->cin;
                $conducteur->permisconduire = $request->permis;
                $conducteur->matricule = $request->matricule;
                $conducteur->commune_id = $request->commune;
                $conducteur->quartier = $request->adresse;
                $conducteur->telephone = $request->tel;
                $conducteur->station_id = $request->codestation;
                $conducteur->proprietaire_id = $proprietaire->id;
                if($request->hasFile('picture')){
                    $image = $request->file('picture');
                    $filename = time()."-".$request->nid.".".$image->getClientOriginalExtension();
                    $image_normal = Image::make($image);
                    Storage::disk('local')->put('conducteur/'.$filename,(string)$image_normal,'public');
                    $conducteur->photo = $filename;
                }
                if($request->hasFile('empreinteg')){
                    $image = $request->file('empreinteg');
                    $filename = time()."-".$request->nid.".".$image->getClientOriginalExtension();
                    $image_normal = Image::make($image);
                    Storage::disk('local')->put('empreinte/'.$filename,(string)$image_normal,'public');
                    $conducteur->photo = $filename;
                    $conducteur->empreint_gauche = $filename;
                }
                if($request->hasFile('empreinted')){
                    $image = $request->file('empreinted');
                    $filename = time()."-".$request->nid.".".$image->getClientOriginalExtension();
                    Storage::disk('local')->put('empreinte/'.$filename,(string)$image_normal,'public');
                    $conducteur->photo = $filename;
                    $conducteur->empreinte_droite = $filename;
                }
                $conducteur->save();
                $reference1 = Reference::where('telephone',$request->telr)->first();
                if(!$reference1){
                    $reference1 = new Reference();
                    $reference1->nom = $request->namer;
                    $reference1->prenom = $request->prenomr;
                    $reference1->quartier = $request->addresser;
                    $reference1->telephone = $request->telr;
                    $reference1->commune_id = $request->communer;
                    $reference1->save();
                }
                $conducteur->references()->attach($reference1);
                $reference2 = Reference::where('telephone',$request->telre)->first();
                if(!$reference2){
                    $reference2 = new Reference();
                    $reference2->nom = $request->namere;
                    $reference2->prenom = $request->prenomre;
                    $reference2->quartier = $request->addressere;
                    $reference2->telephone = $request->telre;
                    $reference2->commune_id = $request->communere;
                    $reference2->save();
                }
                $conducteur->references()->attach($reference2);
            }
            return redirect()->route('registraire');

    }

}