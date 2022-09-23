<?php

namespace App\Http\Controllers;

// use App\Models\Mainnew;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function home()
    {
        $news = \App\Models\Mainnew::limit(4)->get();
        
        foreach ($news as $nw) {
            $nw['short_title'] = Str::limit($nw['title'], 40, '...');
            $nw['date'] = MainController::month_name($nw['created_at']);
        }
        // dd($news);
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
        $single_novosti = \App\Models\Mainnew::where('slug', $slug)->first();

        if (!$single_novosti) {
            return abort(404);
        }

        return view('single_novosti', compact('single_novosti'));
    }




    public function otzyvy()
    {
        return view('otzyvy');
    }

    public function kontakty()
    {
        return view('kontakty');
    }
       
    public static function month_name($datetime)
    {   
        $year = mb_substr($datetime, 0, 4);
        $month = mb_substr($datetime, 5, 2);
        $day = mb_substr($datetime, 8, 2);

        switch ($month) {
            case '01':
                $month = 'января';
                break;
            case '02':
                $month = 'февраля';
                break;
            case '03':
                $month = 'марта';
                break;
            case '04':
                $month = 'апреля';
                break;
            case '05':
                $month = 'мая';
                break;
            case '06':
                $month = 'июня';
                break;
            case '07':
                $month = 'июля';
                break;
            case '08':
                $month = 'августа';
                break;
            case '09':
                $month = 'сентября';
                break;
            case '10':
                $month = 'октября';
                break;
            case '11':
                $month = 'ноября';
                break;
            case '12':
                $month = 'декабря';
                break;
        }

        $date = [
            'day' => $day,
            'month-year' => $month . ' ' . $year,
        ];

        return $date;
    }
    
}
