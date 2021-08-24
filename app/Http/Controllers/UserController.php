<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomUser;
use App\Models\User;
use Illuminate\Support\Facades\hash;

class UserController extends Controller
{
    //***************REGISTER******************
    // Show the form
    public function create()
    {
        return view('register-form');
    }

    public function store(Request $request)
    {
        // Save user in DB

        $validations = $request->validate([
            'username' => 'required|max:50',
            'email' => 'required|email:rfc',
            'password' => 'required'
        ]);

        $user = new CustomUser;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return 'Saved successfull';
    }


    //****************LOGIN*******************

    // Show the login form
    public function show_Login()
    {
        return view('login-form');
    }


    //log the user
    public function login(Request $request)
    {
        // Save user in DB

        $validations = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = CustomUser::where('username', '=', $request->username)->first();

        // Check if the user exists in the DB
        if (isset($user)) {
            // Check if password matches
            if (Hash::check($request->password, $user->password)) {
                // The passwords match...
                $request->session()->put('username', $user->username);
                return redirect('flowers');
            }
        } else {
            return redirect()->back()->with('status', 'Username doesnt exists');
        }
    }
}
