<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AndroidController extends Controller
{
    public function get($id){
        $vehicule = DB::table('vehicule')->where('numMoteur',$id)->first();

        $rep = array();

        $v = new \stdClass();
        $v->numMoteur = $vehicule->numMoteur;
        $v->numSerie = $vehicule-> numSerie;
        $v->marque = $vehicule->marque;
        $v->annee = $vehicule->annee;
        $v->couleur = $vehicule->couleur;
        $v->immatriculation =$vehicule->immatriculation;
        $v->proprietaires_nif = $vehicule->proprietaires_nif;

        array_push($rep,$v);
        $proprio = DB::table('proprietaire')->where('nif','001-821-449-4')->first();

        array_push($rep, $proprio);
        $conducteur = DB::table('conducteur')->where('vehicule_numMoteur',$vehicule->numMoteur)->first();

        array_push($rep, $conducteur);

        $station  = DB::table('station')->where('idstation',$conducteur->station_idstation)->first();

//        array_push($rep, $station);
        return response()->json($rep);
//        echo "<pre>";
//        var_dump($vehicule);
//        echo "</pre>";
    }
}
