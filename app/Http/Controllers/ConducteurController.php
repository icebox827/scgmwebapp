<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConducteurController extends Controller
{
    public function index()
    {
        return view('conducteur');
    }
}
