<?php

namespace App\Http\Controllers;

use App\Proprietaire;
use App\Vehicule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProprietaireController extends Controller
{
    public function index(){
        $proprietaires = Proprietaire::orderBy('updated_at','desc')->get();
        return view('proprietaire',compact('proprietaires'));
    }
    public function details($id){
        $proprietaire = Proprietaire::find($id);
        $vehicules = Vehicule::where('proprietaire_id',$id)->get();
        return view ('vehicules-details',compact('proprietaire','vehicules'));
    }

    public function save(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'prenom' => 'required',
            'birthdate' => 'required',
            'lnaissance' => 'required',
            'sex' => 'required',
            'tel' => 'required',
            'nif' => 'required',
            'adresse' => 'required',
            'commune' => 'required'

        ]);

        $proprietaire = Proprietaire::where('nif', $request->nif)->first();
        if(!$proprietaire){
            $proprietaire = new Proprietaire();
            $proprietaire->nom = $request->name;
            $proprietaire->prenom = $request->prenom;
            $proprietaire->nif = $request->nif;
            $proprietaire->datenaissance = new Carbon($request->birthdate);
            $proprietaire->sexe= $request->sex;
            $proprietaire->permisconduire = $request->permis;
            $proprietaire->commune_id = $request->commune;
            $proprietaire->telephone = $request->tel;
            $proprietaire->adress = $request->adresse;
            $proprietaire->save();
            return redirect()->route('proprietaire');
        }else{
            return redirect()->back()->withErrors(['msg' => 'Ce proprietaire existe deja']);
        }


    }

}
