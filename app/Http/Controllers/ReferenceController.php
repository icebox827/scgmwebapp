<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function index(){
        $references = Reference::orderBy('nom','asc')->get();
        $communes = Commune::orderBy('name','asc')->get();
        return view('reference',compact('references','communes'));
    }
    public function save(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'tel' => 'required'
        ]);

        $reference = new Reference();

        $reference->nom = $request->name;
        $reference->prenom = $request->prenom;
        $reference->quartier = $request->adresse;
        $reference->telephone = $request->telephone;
        $reference->commune_id = $request->commune;
        $reference->save();

        return redirect()->route('reference');
    }

}
