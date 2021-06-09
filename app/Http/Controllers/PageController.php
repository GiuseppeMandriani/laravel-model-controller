<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller

// Metodi per gestire rotte

{
    // Homepage 
    public function index(){
        return view('home');
    }

    //Movies
    public function movies(){
        return view('movies');
    }
}
