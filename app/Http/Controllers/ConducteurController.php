<?php

namespace App\Http\Controllers;

use App\Conducteur;
use Illuminate\Http\Request;

class ConducteurController extends Controller
{
    public function index()
    {
        $conducteurs = Conducteur::orderBy('updated_at','desc')->get();

        return view('conducteur',compact('conducteurs'));
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
            'empreinted' => 'required',
            'empreinteg' => 'required',
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
            }
        }
    }
}
