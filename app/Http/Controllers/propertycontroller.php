<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\District;
use Illuminate\Http\Request;

class propertycontroller extends Controller
{

    public function newproperty()
    {
        $dist=District::all();
      return view('property/newproperty',compact('dist'));

    }
    public function viewproperties()
    {

        $getuserid = auth()->User();
        $propertiesgetvariable = $getuserid->propertiesfunction;//relation are used here
        // return view('property/properties',['propertiesgetvariable'=>Property::get()]);
        return view('property/properties',compact('propertiesgetvariable'));
        // Property= model_name, propertiesgetvariable=variable

        // get individual id
                    // echo $id;
                    $viewdetails= Property::where('id',$id)->first();

                    return view('property/viewpropertydetails',compact('viewdetails'));
    }


    public function propertydata(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|min:4',
            'address1' => 'required',
            'address2' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|max:6',
            'description' => 'nullable|max:200',
            'rent' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'image' => 'nullable|mimes:jpeg,png,gif|max:10000'


        ]);

        // user id picked from db using auth function
        $user = auth()->user();


        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('property_image'), $imagename);
        // dd($imagename);
        $propertydata=new Property;
        $propertydata->image= $imagename;
        $propertydata->title = $request->title;
        $propertydata->user_id = $user->id;
        $propertydata->address_1 = $request->address1;
        $propertydata->address_2 = $request->address2;
        $propertydata->country = $request->country;
        $propertydata->state = $request->state;
        $propertydata->city = $request->city;
        $propertydata->pincode = $request->pincode;
        $propertydata->description = $request->description;
        $propertydata->rent = $request->rent;
        $propertydata->lattitude = $request->latitude;
        $propertydata->longitude = $request->longitude;

        $propertydata->save();
        // return back()->withSuccess('Product inserted/created successfully');

        return back()->with('success','property data filled ');


    }
    public function show($id)
       {
            // echo $id;
            $viewdetails= Property::where('id',$id)->first();
            // echo $viewdetails->title;
            return view('property/viewpropertydetails',compact('viewdetails'));
        }

    public function edit($id)
    {
        // return view('property/edit');
                    // echo $id;
                    $editdetails= Property::where('id',$id)->first();
                    // echo $viewdetails->id;
                    return view('property/edit',compact('editdetails'));
    }


    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'title' => 'required|min:4',
            'address1' => 'required',
            'address2' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|max:6',
            'description' => 'nullable|max:200',
            'rent' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'image' => 'nullable|mimes:jpeg,png,gif|max:10000'


        ]);

        // user id picked from db using auth function
        $user = auth()->user();

        $propertydata = Property::where('id',$id)->first();
        if(isset($request->image)){
            $imagename = time().'.'.$request->image->extension();
            $request->image->move(public_path('property_image'), $imagename);
            $propertydata->image= $imagename;
        }
        $propertydata->title = $request->title;
        $propertydata->user_id = $user->id;
        $propertydata->address_1 = $request->address1;
        $propertydata->address_2 = $request->address2;
        $propertydata->country = $request->country;
        $propertydata->state = $request->state;
        $propertydata->city = $request->city;
        $propertydata->pincode = $request->pincode;
        $propertydata->description = $request->description;
        $propertydata->rent = $request->rent;
        $propertydata->lattitude = $request->latitude;
        $propertydata->longitude = $request->longitude;

        $propertydata->save();
        // return back()->withSuccess('Product inserted/created successfully');

        return back()->with('success','updated successfully ');


    }

    public function districtlist2()
    {
        // $this->dist=District::all();
        // // echo $dist;
        // return view('property/newproperty',compact('dist'));

    }
}
