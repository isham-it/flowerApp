<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class ApiController extends Controller
{

    public function getMovies()
    {
        $movies = Movie::all();
        return $movies->toJson(JSON_PRETTY_PRINT);
    }

    public function getMovie($title)
    {
        $movies = Movie::where('title', 'like', '%' . $title . '%')->get();
        return $movies->toJson(JSON_PRETTY_PRINT);
    }
}
