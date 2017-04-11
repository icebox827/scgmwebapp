<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Proprietaire;
use App\Reference;
use Illuminate\Http\Request;

class AddconducteurController extends Controller
{
    public function index()
    {
        $communes = Commune::orderBy('name','asc')->get();
        $prorietaires = Proprietaire::all();
        $references = Reference::all();
        return view('addconducteur',compact('prorietaires','communes','references'));
    }
}