<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
   public function index()
    {
        return view('index');
    }

    public function signup()
    {
        return view('registration/signup');
    }

    public function storedata(Request $request)
    {
        $val = $request->validate([
            'firstname' => 'required|min:2|max:20',
            'lastname' => 'required|min:2|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'min:8|required',
        ]);


        $backup = User::create(
            [
                // fnam=database name and firstname=form input field name
                'fname'=>request()->get('firstname'),
                'lname'=>request()->get('lastname'),
                'email'=>request()->get('email'),
                'password'=>request()->get('password'),
            ]
            );

            return back()->with('success','user created');

    }
}

