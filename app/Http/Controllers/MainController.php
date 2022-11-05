<?php

namespace App\Http\Controllers;

// use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function home()
    {
        $news = \App\Models\Mainnew::limit(4)->orderBy('id', 'desc')->get();
        
        foreach ($news as $nw) {
            $nw['short_title'] = Str::limit($nw['title'], 36, '...');
            $nw['date'] = MainController::datetime_format($nw['created_at'], 2);
        }

        return view('home', compact('news'));
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function o_kompanii()
    {
        return view('o_kompanii');
    }

    public function dostavka_i_oplata()
    {   
        $cities = \App\Models\City::get();

        return view('dostavka_i_oplata', compact('cities'));
    }

    public function novosti()
    {
        $news = \App\Models\Mainnew::limit(60)->orderBy('id', 'desc')->get();

        foreach ($news as $nw) {
            $nw['short_title'] = Str::limit($nw['title'], 36, '...');
            $nw['date'] = MainController::datetime_format($nw['created_at'], 2);
        }

        $news = MainController::custom_paginator($news, 12);

        return view('novosti', compact('news'));
    }

    public function single_novosti($slug)
    {
        $single_novosti = \App\Models\Mainnew::where('slug', $slug)->first();

        if (!$single_novosti) {
            return abort(404);
        }
        
        $single_novosti['date'] = MainController::datetime_format($single_novosti['created_at'], 1);

        return view('single_novosti', compact('single_novosti'));
    }

    public function otzyvy()
    {   
        $testimonials = \App\Models\Testimonial::limit(100)
                                            ->whereNotNull('publicated_at')
                                            ->orderBy('created_at', 'desc')
                                            ->get();

        foreach ($testimonials as $ts) {
            $ts['date'] = MainController::datetime_format($ts['created_at'], 3);
        }

        $testimonials = MainController::custom_paginator($testimonials, 10);

        return view('otzyvy', compact('testimonials'));
    }

    public function kontakty()
    {
        return view('kontakty');
    }

    public function cart(Request $request)
    {   
        $cart_items = $request->session()->get('cart');

        $products = '';

        if ($cart_items) {
            $key_items = array_keys($cart_items);

            $products = DB::table('products')
                        ->whereIn('id', $key_items)
                        ->get();

            foreach ($products as $key => $value) {
                $id = $value->id;
                $value->quantity = $cart_items[$id];
            }

        }
        
        return view('cart', compact('products'));
    }

    public function clear_cart()
    {   
        session()->pull('cart', 'default');
        return redirect('/cart');
    }

    public function poisk(Request $request)
    {
        return view('poisk');
    }

    public function single_product()
    {
        return view('single_product');
    }



    // temp
    public function novinki()
    {
        return view('novinki');
    }

    public function peppers()
    {
        return view('peppers');
    }

    public function tomatoes()
    {
        return view('tomatoes');
    }

    public function cucumbers()
    {
        return view('cucumbers');
    }

    public function chemicals()
    {
        return view('chemicals');
    }



    




    public function stat_partnerom()
    {
        return view('stat_partnerom');
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

    public function ajax_testimonial(Request $request)
    {   
        $request->validate([
            'name' => 'required|min:3|max:20',
            'city' => 'required|min:3|max:30',
            'text' => 'required|min:3|max:300',
            'checkbox' => 'accepted'
        ]);

        $testimonials = new \App\Models\Testimonial([
            'name' => $request->get('name'),
            'city' => $request->get('city'),
            'text' => $request->get('text'),
            'publicated_at' => NULL
        ]);

        $testimonials->save();

        return true;
    }


    /*
    * Datetime 0000-00-00 00:00:00 to custom format
    * format 1 01 января 2022
    * format 2 array
    * format 3 01.01.2022
    */
    public static function datetime_format($datetime, $format)
    {   
        $year = mb_substr($datetime, 0, 4);
        $month = mb_substr($datetime, 5, 2);
        $day = mb_substr($datetime, 8, 2);

        $month_string = '';

        switch ($month) {
            case '01':
                $month_string = 'января';
                break;
            case '02':
                $month_string = 'февраля';
                break;
            case '03':
                $month_string = 'марта';
                break;
            case '04':
                $month_string = 'апреля';
                break;
            case '05':
                $month_string = 'мая';
                break;
            case '06':
                $month_string = 'июня';
                break;
            case '07':
                $month_string = 'июля';
                break;
            case '08':
                $month_string = 'августа';
                break;
            case '09':
                $month_string = 'сентября';
                break;
            case '10':
                $month_string = 'октября';
                break;
            case '11':
                $month_string = 'ноября';
                break;
            case '12':
                $month_string = 'декабря';
                break;
        }

        $date_time = '';

        switch ($format) {
            case '1':
                $date_time = $day . ' ' . $month_string . ' ' . $year;
                break;
            case '2':
                $date_time = [
                    'day' => $day,
                    'month-year' => $month_string . ' ' . $year,
                ];
                break;
            case '3':
                $date_time = $day . '.' . $month . '.' . $year;
                break;
        }

        return $date_time;
    }

    /*
    * Pagination with limit
    * input Illuminate\Database\Eloquent\Collection
    * return Illuminate\Pagination\LengthAwarePaginator
    * $perPage count per page
    */
    public static function custom_paginator($collection, $perPage)
    {
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        if ($currentPage == 1) {
            $start = 0;
        }
        else {
            $start = ($currentPage - 1) * $perPage;
        }

        $currentPageCollection = $collection->slice($start, $perPage)->all();

        $paginatedTop100 = new LengthAwarePaginator($currentPageCollection, count($collection), $perPage);

        return $paginatedTop100->setPath(LengthAwarePaginator::resolveCurrentPath());
    }

    
}
