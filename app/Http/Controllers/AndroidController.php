<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Conducteur;
use App\Departement;
use App\Proprietaire;
use App\Station;
use App\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class AndroidController extends Controller
{
    public function get($id){

        $vehicule = Vehicule::where('nummoteur',$id)->first();

        $rep = array();

        $v = new \stdClass();
        $v->numMoteur = $vehicule->nummoteur;
        $v->numSerie = $vehicule-> numserie;
        $v->marque = $vehicule->marque;
        $v->annee = $vehicule->annee;
        $v->couleur = $vehicule->couleur;
        $v->immatriculation =$vehicule->immatriculation;
//        $v->proprietaires_nif = $vehicule->proprietaire->nif;

        array_push($rep,$v);
        $proprio = Proprietaire::find($vehicule->proprietaire->id);

        array_push($rep, $proprio);
        $conducteur = Conducteur::where('proprietaire_id',$proprio->id)->first();
        $c = new \stdClass();
        $c->nif = $conducteur->nif;
        $c->nom = $conducteur->nom;
        $c->prenom = $conducteur->prenom;
        $c->datenaissance = $conducteur->datenaissance;
        $c->image = URL::to('storage/')."/".$conducteur->photo;
        $c->lieunaissance = $conducteur->lieunaissance;
        $c->sexe = $conducteur->sexe;
        $c->permisconduire = $conducteur->permisconduire;
        $c->matricule = $conducteur->matricule;
        $c->numero = $conducteur->numero;
        $c->rue = $conducteur->rue;
        $c->quartier = $conducteur->quartier;
        $c->telephone = $conducteur->telephone;

        array_push($rep, $c);

        $station  = Station::find($conducteur->station_id);
        $s = new \stdClass();
        $s->codestation = $station->codestation;
        $com = Commune::find($station->commune_id);
        $s->commune = $com->name;
        $dept = Departement::find($com->departement_id);
        $s->departement =$dept->name;
        $s->station = $station->station;

        array_push($rep, $s);
        return response()->json($rep);
//        echo "<pre>";
//        var_dump($vehicule);
//        echo "</pre>";
    }

    public function plaque($id){
        $vehicule = Vehicule::where('immatriculation','LIKE',$id)->first();

        $rep = array();

        $v = new \stdClass();
        $v->numMoteur = $vehicule->nummoteur;
        $v->numSerie = $vehicule-> numserie;
        $v->marque = $vehicule->marque;
        $v->annee = $vehicule->annee;
        $v->couleur = $vehicule->couleur;
        $v->immatriculation =$vehicule->immatriculation;
//        $v->proprietaires_nif = $vehicule->proprietaire->nif;

        array_push($rep,$v);
        $proprio = Proprietaire::find($vehicule->proprietaire->id);

        array_push($rep, $proprio);
        $conducteur = Conducteur::where('proprietaire_id',$proprio->id)->first();
        $c = new \stdClass();
        $c->nif = $conducteur->nif;
        $c->nom = $conducteur->nom;
        $c->prenom = $conducteur->prenom;
        $c->datenaissance = $conducteur->datenaissance;
        $c->image = URL::to('storage/')."/".$conducteur->photo;
        $c->lieunaissance = $conducteur->lieunaissance;
        $c->sexe = $conducteur->sexe;
        $c->permisconduire = $conducteur->permisconduire;
        $c->matricule = $conducteur->matricule;
        $c->numero = $conducteur->numero;
        $c->rue = $conducteur->rue;
        $c->quartier = $conducteur->quartier;
        $c->telephone = $conducteur->telephone;

        array_push($rep, $c);

        $station  = Station::find($conducteur->station_id);
        $s = new \stdClass();
        $s->codestation = $station->codestation;
        $com = Commune::find($station->commune_id);
        $s->commune = $com->name;
        $dept = Departement::find($com->departement_id);
        $s->departement =$dept->name;
        $s->station = $station->station;

        array_push($rep, $s);
        return response()->json($rep);
    }
}
