<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Proprietaire;
use App\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ImportController extends Controller
{
    public function station(Request $request){
        $array = $this->readCsv();
        for($i=0;$i<count($array);$i++){
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

    public function readCsv(){
        $file_handle = fopen('/var/www/scgm/public/vehicule.csv','r');
        while (!feof($file_handle)){
            $line_of_text[] = fgetcsv($file_handle, 1024,";");
        }
        fclose($file_handle);

        return $line_of_text;
    }
}
