<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public  function index()
    {
        $welcome_message = 'Lista dei desideri';
        $movies = Movie::all();

        return view('home', compact('welcome_message', 'movies'));
    }
}
