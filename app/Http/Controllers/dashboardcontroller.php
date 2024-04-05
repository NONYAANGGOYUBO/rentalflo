<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function dashboard()
    {
        return view('dashboard/dashboard');
    }

    public function tenant()
    {

        return view('tenant/tenant',['ango'=>Property::get()]);
    }
    public function rent()
    {
        return view('rent/rent');
    }
    public function expenses()
    {
        return view('expenses/expenses');
    }
    public function setting()
    {
        return view('setting/setting');
    }
}



