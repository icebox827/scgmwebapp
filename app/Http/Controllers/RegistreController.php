<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistreController extends Controller
{
    public function index(){
        return view('registre');
    }

}