<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:web2');
    // }

    public function home()
    {
        return view('dashboard.home');
    }
}
