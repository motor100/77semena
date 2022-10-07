<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function home()
    {
        $news = \App\Models\Mainnew::limit(4)->get();
        
        foreach ($news as $nw) {
            $nw['short_title'] = Str::limit($nw['title'], 36, '...');
            $nw['date'] = MainController::month_name($nw['created_at']);
        }

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
        $news = \App\Models\Mainnew::limit(60)->get();
        
        foreach ($news as $nw) {
            $nw['short_title'] = Str::limit($nw['title'], 36, '...');
            $nw['date'] = MainController::month_name($nw['created_at']);
        }

        // Пагинация с ограничением limit
        $perPage = 12;
        
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        if ($currentPage == 1) {
            $start = 0;
        }
        else {
            $start = ($currentPage - 1) * $perPage;
        }

        $currentPageCollection = $news->slice($start, $perPage)->all();

        $paginatedTop100 = new LengthAwarePaginator($currentPageCollection, count($news), $perPage);

        $news = $paginatedTop100->setPath(LengthAwarePaginator::resolveCurrentPath());

        return view('novosti', compact('news'));
    }

    public function single_novosti($slug)
    {
        $single_novosti = \App\Models\Mainnew::where('slug', $slug)->first();

        if (!$single_novosti) {
            return abort(404);
        }
        
        $single_novosti['date'] = MainController::month_name($single_novosti['created_at'], true);

        return view('single_novosti', compact('single_novosti'));
    }

    public function otzyvy()
    {   
        $testimonials = \App\Models\Testimonial::paginate(10);

        return view('otzyvy', compact('testimonials'));
    }

    public function kontakty()
    {
        return view('kontakty');
    }

    public function politika_konfidencialnosti()
    {
        return view('politika_konfidencialnosti');
    }

    public function polzovatelskoe_soglashenie_s_publichnoj_ofertoj()
    {
        return view('polzovatelskoe_soglashenie_s_publichnoj_ofertoj');
    }

    public function garantiya_vozvrata_denezhnyh_sredstv()
    {
        return view('garantiya_vozvrata_denezhnyh_sredstv');
    }

    public function dokumenty()
    {
        return view('dokumenty');
    }


    
    public function crud()
    {   
        $news = \App\Models\Mainnew::orderBy('id', 'desc')->paginate(20);
        
        return view('crud', compact('news'));
    }




    
       
    public static function month_name($datetime, $fulldate = false)
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

        if ($fulldate) {
            return $day . ' ' . $month . ' ' . $year;
        } else {
            return [
                'day' => $day,
                'month-year' => $month . ' ' . $year,
            ];
        }
    }
    
}
