<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Validator;

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

     public function ajaxForm()
     {
         return view("ajax-form");
     }

    public function ajaxAnswer(Request $request)
    {
        // + Validations
        $validations = Validator::make($request->all(), [
            'title' => 'required|max:50',
            'date' => 'required',
        ]);

        // + Upload file
        $fileName = $request->file->getClientOriginalName(); //'randomName.' . $request->file->extension();
        $public_path = public_path('uploads');

        $request->file->move($public_path, $fileName);

        // + Try to insert in the DB
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->date = $request->date;
        $movie->poster = $fileName;
        $movie->save();

        // Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);

        return response()->json(['success' => 'Record is added']);
    }
}
