<?php

namespace App\Http\Controllers;
use App\Models\Tenant;
use Illuminate\Http\Request;

class tenantcontroller extends Controller
{
    public function newtenant()
    {
        return view('tenant/newtenant');
    }
    public function storetenantdata(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:4',
            'contactno' => 'required',
            'contactemail' => 'required',
            'address' => 'required',
            'image' => 'nullable|mimes:jpeg,png,gif|max:10000'

        ]);
        $user = auth()->user();
        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('tenant_image'), $imagename);

        $tenantdata=new Tenant;
        $tenantdata->imageidproof= $imagename;
        $tenantdata->name = $request->name;
        $tenantdata->user_id = $user->id;
        $tenantdata->contactno = $request->contactno;
        $tenantdata->contactemail = $request->contactemail;
        $tenantdata->address = $request->address;

        $tenantdata->save();
        return back()->with('success','Tenant data filed successfully ');
    }

    public function viewtenant()
    {
        $getuseridd = auth()->User();
        $tenantvariable = $getuseridd->tenantfunction;  //relation are used here
        return view('tenant/tenant',compact('tenantvariable'));
     }



    }




