<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reference extends Model
{
    public function communeId(){
        return $this->belongsTo(Commune::class);
    }
}
