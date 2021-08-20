<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class ApiFlowerController extends Controller
{
    public function getFlowers()
    {
        $flowers = Flower::all();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    public function getFlower($amount)
    {

        $flowers = Flower::take($amount)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

}

