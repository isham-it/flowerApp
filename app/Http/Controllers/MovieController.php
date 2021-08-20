<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        foreach ($movies as $movie) {
            echo 'Title : ' . $movie->title;
            echo 'Info : ' . $movie->info;
            echo '<hr>';
        }
    }
}
