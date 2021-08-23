<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate automatically return back() to previous page if errors
        $validations = Validator::make($request->all(), [
            'username' => 'required|max:30',
            'mail' => 'required|min:2|max:50',
            'password' => 'required|min:2|max:50',
        ]);

        // Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);


        $user = User::create([
            'username' => $request->username,
            'mail' => $request->mail,
            'password' => $request->password
        ]);

        return response()->json(['success' => 'Record is added']);
}
