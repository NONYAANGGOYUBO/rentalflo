<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login()
        {
            return view('loginpage.login');
        }

    public function logedin(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($credential))
        {
            request()->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return back()->with('failed','invalid email or password please try again');
    }


    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerate();
        // return redirect()->route('index');
        return redirect()->route('login');

     }

}



