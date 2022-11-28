<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function home()
    {   
        return view('profile.home');
    }

    public function calc()
    {   
        return view('profile.calc');
    }

    public function done_orders()
    {   
        return view('profile.done-orders');
    }

    
}
