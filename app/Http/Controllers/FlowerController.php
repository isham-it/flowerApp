<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Flower;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$flowers = DB::select('SELECT * FROM flowers');
        $flowers = Flower::all();

        // To display a specific view :
        return view('flowers', ['flowers' => $flowers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-flower');
    }
    public function comment()
    {
        return view('new-flower');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate automatically return back() to previous page if errors
        $validated = $request->validate([
            'name' => 'required|max:30',
            'price' => 'required|numeric|min:2|max:100',
        ]);

        /*
           DB::insert(
            'INSERT INTO flowers(name, price) VALUES(?, ?)',
            [$request->name, $request->price]
        );
*/

        $flower = new Flower;

        $flower->name = $request->name;
        $flower->price = $request->price;

        $flower->save();

        // redirect to flowers list with a message
        return redirect('flowers')->with('success', $request->name . ' was created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Grab the flower
        //$flower = DB::select('SELECT * FROM flowers WHERE id = ?', [$id]); // this returns an array
        $flower = Flower::find($id);




        $comments=$flower->comments;

        //dd($flower->comments);

        // Show the form
        return view('details-flower', ['flower' => $flower,'comments'=>$comments]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Grab the flower
        //$flower = DB::select('SELECT * FROM flowers WHERE id = ?', [$id]); // this returns an array

        $flower = Flower::find($id);

        // Show the form
        return view('update-flower', ['flower' => $flower]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //DB::update('UPDATE flowers SET name=?, price=? WHERE id = ?', [$request->name, $request->price, $id]);
        $flower = Flower::find($id);

        $flower->name = $request->name;
        $flower->price = $request->price;

        $flower->save();

        // redirect to flowers list with a message
        return redirect('flowers')->with('success', $request->name . ' was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Flower::destroy($id);
        //DB::delete('DELETE FROM flowers WHERE id = ?', [$id]);

        // redirect to flowers list with a message
        return redirect('flowers')->with('success', 'Flower deleted');
    }


}
