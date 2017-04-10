<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    public function communeId(){
        return $this->belongsTo(Commune::class);
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
}
