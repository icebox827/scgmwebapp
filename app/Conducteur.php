<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    public function communeId(){
        return $this->belongsTo(Commune::class);
    }
    public function commune(){
        return $this->belongsTo('App\Commune');
    }
    public function proprietaireId(){
        return $this->belongsTo(Proprietaire::class);
    }
    public function proprietaire(){
        return $this->belongsTo('App\Proprietaire');
    }
    public function stationId(){
        return $this->belongsTo(Station::class);
    }
    public function station(){
        return $this->belongsTo('App\Station');
    }
    public function vehiculeId(){
        return $this->belongsTo(Vehicule::class);
    }
    public function vehicule(){
        return $this->belongsTo('App\Vehicule');
    }
    public function references(){
        return $this->belongsToMany('App\Reference','conducteur_has_reference','conducteur_id','reference_id');
    }
}
