<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Commune extends Model
{
    public function departementId(){
        return $this->belongsTo(Departement::class);
    }
    public function departement(){
        return $this->belongsTo('App\Departement');
    }
}
