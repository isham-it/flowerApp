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

    public function getAmountFlower($amount)
    {

        $flowers = Flower::take($amount)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    public function getIdFlower($id)
    {
        //find pour rechercher par ID
        $flowers = Flower::find($id)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    public function getTypeFlower($type)
    {
        //$flowers = Flower::where('type','like', '%' . $type . '%')->get();
        $flowers = Flower::where('type','like',$type)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

}

