<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    public function proprietaireId(){
        return $this->belongsTo(Proprietaire::class);
    }

    public function proprietaire(){
        return $this->belongsTo(Proprietaire::class);
    }
    public function conducteur($id){
        $proprietaire = $this->proprietaire_id;
        $conducteur = Conducteur::where('vehicule_id',$id)->first();
        return $conducteur;
    }
}
