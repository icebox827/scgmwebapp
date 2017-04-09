<?php

namespace App\Http\Controllers;

use App\Proprietaire;
use Illuminate\Http\Request;

class AddconducteurController extends Controller
{
    public function index()
    {
        $prorietaires = Proprietaire::all();
        return view('addconducteur',compact('prorietaires'));
    }
}