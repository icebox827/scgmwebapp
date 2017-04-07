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
}
