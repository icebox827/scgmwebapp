<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistraireController extends Controller
{
    public function index(){
        return view('registraire');
    }

}