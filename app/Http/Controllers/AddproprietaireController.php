<?php

namespace App\Http\Controllers;

use App\Commune;
use Illuminate\Http\Request;

class AddproprietaireController extends Controller
{
    public function index()
    {
        $communes = Commune::orderBy('name','asc')->get();
        return view('addproprietaire',compact('communes'));
    }
}