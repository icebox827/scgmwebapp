<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reference extends Model
{
    public function communeId(){
        return $this->belongsTo(Commune::class);
    }
    public function commune(){
        return $this->belongsTo('App\Commune');
    }
    public function conducteurs(){
        return $this->belongsToMany('App\Conducteur','conducteur_has_reference','reference_id','conducteur_id');
    }
}
