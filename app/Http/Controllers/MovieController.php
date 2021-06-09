<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    // ARCHIVIO FILM
    public function index(){

    // Ottenere film dal db
        $movies = Movie::all();
        // dump($movies);

        return view('movies', compact('movies'));
    }


}
