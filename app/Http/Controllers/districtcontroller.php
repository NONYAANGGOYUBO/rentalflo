<?php

namespace App\Http\Controllers;
use App\Models\District;
use Illuminate\Http\Request;

class districtcontroller extends Controller
{
    // public function district()
    // {
    //     return view('district/dist');
    // }
    public function storedist(Request $request)
    {
        $val = $request->validate([

            'districtname' => 'min:4|required|unique:districts,district_name',
            // 'email' => 'required|email|unique:users,email',

        ]);

        $backup = District::create(
            [
                'district_name'=>request()->get('districtname'),

            ]
            );

            return back()->with('success','user created');

    }
    public function districtlist()
    {
        $dist=District::all();
        // echo $dist;
        return view('district/districtlist',compact('dist'));

        // return view('district/distlist');
    }

        public function districtlist2()
    {
        $dist=District::all();
        // echo $dist;
        return view('property/newproperty',compact('dist'));

    }
}
