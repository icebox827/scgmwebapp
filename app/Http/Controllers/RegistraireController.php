<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;

class RegistraireController extends Controller
{
    public function index(){
        $stations = Station::orderBy('name','asc')->get();
        return view('registraire',compact('stations'));
    }
    public function save(Request $request){
        $this->validate($request,[

        ]);
    }

}