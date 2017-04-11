<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Proprietaire;
use App\Vehicule;
use App\Conducteur;
use App\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ImportController extends Controller
{
    public function station(Request $request){
        ini_set('max_execution_time', 600);
        $array = $this->readCsv();
        for($i=0;$i<count($array);$i++){
            $vehicule = Vehicule::where('nummoteur',$array[$i][1])->first();
            if(!$vehicule){
              $vehicule = new Vehicule();
            $vehicule->nummoteur=$array[$i][1];
            $vehicule->numserie = $array[$i][2];
            $vehicule->marque = $array[$i][3];
            $vehicule->modele = $array[$i][4];
            $vehicule->annee = $array[$i][5];
            $vehicule->couleur = $array[$i][6];
            $vehicule->immatriculation = $array[$i][7];
            $vehicule->puissance = $array[$i][11];
            $proprietaire = Proprietaire::where('nif',$array[$i][12])->first();
            if($proprietaire){
                $vehicule->proprietaire_id = $proprietaire->id;
                $vehicule->save();
            }
              
            }
            

        }


    }

    public function readCsv(){
        $file_handle = fopen('C:\wamp64\www\scgmwebapp\public\reference.csv','r');
        while (!feof($file_handle)){
            $line_of_text[] = fgetcsv($file_handle, 1024,";");
        }
        fclose($file_handle);

        return $line_of_text;
    }


public function conducteur(){
        ini_set('max_execution_time', 1200);
        $array = $this->readCsv();
        // echo "<pre>";
        //     print_r($array);
        // echo "</pre>";
        for($i=1;$i<count($array);$i++){
            $conducteur = Conducteur::where('nif', $array[$i][1])->first();
            if(!$conducteur){
                if($i != 791 and $i != 882 and $i !=1374 and $i!=1617 and $i!= 2130 and $i != 2277 and $i != 2900 and $i != 2973 and $i!=3345 and $i!=3542){
 $conducteur = new Conducteur();
             $conducteur->nif=$array[$i][1];
             $conducteur->nom=utf8_encode($array[$i][2]);
             $conducteur->prenom=utf8_encode($array[$i][3]);
             try {
                 $conducteur->datenaissance=$array[$i][4];
             } catch (Exception $e) {
                 $conducteur->datenaissance="1970-01-01";
             }
             
             $conducteur->lieunaissance=utf8_encode($array[$i][5]);
             $conducteur->sexe=$array[$i][6];
             $conducteur->cin=$array[$i][7];
             $conducteur->permisconduire=$array[$i][8];
             $conducteur->matricule=$array[$i][9];
             // $conducteur->numero=$array[$i][10];
             $conducteur->rue=$array[$i][11];
             $conducteur->quartier=$array[$i][12];
             // $commune = Commune::where('name','LIKE', $array[$i][23])->first();
             // $conducteur->commune_id = $commune->id;
             $conducteur->telephone=$array[$i][14];
             $conducteur->photo="conducteur/".$array[$i][1].'.png';
                    $conducteur->empreinte_droite="empreinte/1/".$array[$i][1].'.png';
             $conducteur->empreint_gauche="empreinte/2/".$array[$i][1].'.png';
             $vehicule = Vehicule::where('nummoteur', $array[$i][26])->first();
             print_r($array[$i][25]." id ".$i);
             $conducteur->vehicule_id = $vehicule->id;
             $proprietaire = Proprietaire::where('nif', $array[$i][24])->first();
             $conducteur->proprietaire_id=$proprietaire->id;
             
             $station = Station::where('codestation', $array[$i][25])->first();
             $conducteur->station_id = $station->id;
             $conducteur->save();
                }
               

        }
            }
            return "Done";

}
}

public function reference(){
     ini_set('max_execution_time', 1200);
     $array = $this->readCsv();
     // Condition pour insertion
     for($i=1;$i<count($array);$i++){
        reference = new Reference();
        $reference->nom=utf8_encode($array[$i][1]);
        $reference->prenom=utf8_encode($array[$i][2]);
        $reference->numero=$array[$i][3];
        $reference->rue=utf8_encode($array[$i][4]);
        $reference->quartier=utf8_encode($array[$i][5]);
        $commune = Commune::where('name','LIKE', $array[$i][6])->first();
        $reference->telephone=$array[$i][7];
        $conducteur = Conducteur::where('nif','LIKE', $array[$i][8])->first();
        $conducteur->references()->attach($reference);
     }
}