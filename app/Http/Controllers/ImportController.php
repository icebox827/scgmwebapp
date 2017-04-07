<?php

namespace App\Http\Controllers;

use App\Commune;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ImportController extends Controller
{
    public function station(Request $request){
//        $st = json_decode($station);
//        $commune = Commune::where('name', 'Delmas')->first();
//
//        return var_dump($st);
        return Input::get('commune');
    }
}
