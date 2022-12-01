<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{


    public function store()
    {
        //validate
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        //Authenticate and login
        if(auth()->attempt($attributes)){
            return redirect('landing');
        };

        //Check for errors
        return back()->withErrors(['email' => 'Incorrect Credentials']);
    }

    public function destroy()
    {
        //Logout User
        auth()->logout();
        
        return redirect('login')->with('success', 'Logged Out Successfully');
    }
}
