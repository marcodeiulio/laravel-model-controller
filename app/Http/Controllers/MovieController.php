<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public  function index()
    {
        $welcome_message = 'Benvenuto sul mio sito';
        $movies = Movie::all();

        return view('home', compact('welcome_message', 'movies'));
    }
}
