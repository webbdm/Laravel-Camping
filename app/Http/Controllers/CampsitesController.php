<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campsite;

class CampsitesController extends Controller
{
    public function index(){

        $campsites = Campsite::all();

        return $campsites; 
        //return view('campsites.index', compact('campsites'));
    }

    public function show(Campsite $campsite){

        return $campsite;

        //return view('campsites.show', compact('campsite'));

    }

    
}
