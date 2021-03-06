<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    public function communeId(){
        return $this->belongsTo(Commune::class);
    }
    public function commune(){
        return $this->belongsTo('App\Commune');
    }
    public function conducteurs(){
        return $this->hasMany('App\Conducteur');
    }

}
