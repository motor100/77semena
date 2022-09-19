<?php

namespace App\Http\Controllers;

use App\Models\Mainnew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home()
    {
        // $news = DB::table('mainnews')
        //             ->limit(6)
        //             ->get();

        $news = Mainnew::limit(6)->get();

        return view('home', compact('news'));
    }

    public function o_kompanii()
    {
        return view('o_kompanii');
    }

    public function dostavka_i_oplata()
    {
        return view('dostavka_i_oplata');
    }

    public function novosti()
    {
        return view('novosti');
    }

    public function single_novosti($slug)
    {
        $single_novosti = Mainnew::where('slug', $slug)->first();

        if (!$single_novosti) {
            return abort(404);
        }

        return view('single_novosti', compact('single_novosti'));
    }

    // Обрезка title




    public function otzyvy()
    {
        return view('otzyvy');
    }

    public function kontakty()
    {
        return view('kontakty');
    }
       
    
    
}
