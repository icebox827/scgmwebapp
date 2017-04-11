<?php

namespace App\Http\Controllers;

use App\Proprietaire;
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

    }

}