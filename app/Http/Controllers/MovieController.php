<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public  function index()
    {
        $welcome_message = 'Lista dei desideri';
        $movies = Movie::all();

        return view('movies.index', compact('welcome_message', 'movies'));
    }

    public  function show($id)
    {
        $welcome_message = 'Lista dei desideri';
        $movie = Movie::findOrFail($id);

        return view('movies.show', compact('welcome_message', 'movie'));
    }
}
