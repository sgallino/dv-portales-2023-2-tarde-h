<?php

namespace App\Http\Controllers;

class MoviesController extends Controller
{
    public function index()
    {
        return view('movies/index');
    }
}