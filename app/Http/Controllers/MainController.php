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

        $new_products = \App\Models\Product::orderBy('id', 'desc')->limit(4)->get();

        $i = 0;
        foreach($new_products as $pr) {
            $pr->count = $i;
            $i++;
        }

        $promo_products = \App\Models\Product::whereNotNull('promo_price')->limit(6)->orderBy('id', 'desc')->get();

        $i = 0;
        foreach($promo_products as $pr) {
            $pr->count = $i;
            $i++;
        }

        return view('home', compact('news', 'new_products', 'promo_products'));
    }

    public function catalog(Request $request)
    {   
        // Get query param
        $query_category = $request->query('category');

        // Categories
        // Get all categories
        $categories = \App\Models\Category::all();

        // Get parent categories
        $parent_category = $categories->where('parent', '0');

        // Get child categories
        foreach($parent_category as $pct) {
            $child_category = $categories->where('parent', $pct->id);
            if (count($child_category) > 0) {
                $pct->child_category = $child_category;
            }
        }

        // Products
        // Get products with query param
        $category = false;
        if($query_category) {
            $category = $categories->where('slug', $query_category)->first();
        }
        
        if($category) {
            $products = \App\Models\Product::where('category_id', $category->id)->limit(20)->orderBy('id', 'desc')->get();
            $category_title = $category->title;
            return view('catalog', compact('products', 'parent_category', 'category_title'));
        } else {
            $products = \App\Models\Product::limit(20)->orderBy('id', 'desc')->get();
            return view('catalog', compact('products', 'parent_category'));
        }
    }

    public function single_product($slug)
    {
        if (is_string($slug) && strlen($slug) > 3 && strlen($slug) < 100) {

            $single_product = \App\Models\Product::where('slug', $slug)->first();

            if ($single_product) {
                return view('single_product', compact('single_product'));
            } else {
                return abort(404);
            }
        } else {
            return redirect('/');
        }
    }

    public function o_kompanii()
    {
        $text = \App\Models\Page::where('id', '1')
                            ->value('text');

        return view('o_kompanii', compact('text'));
    }

    public function dostavka_i_oplata()
    {   
        // Cities
        $cities = \App\Models\City::all();
        
        // Offices
        $offices = \App\Models\Office::all();

        return view('dostavka_i_oplata', compact('cities', 'offices'));
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
                                            ->orderBy('id', 'desc')
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

            // через модель Products
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

    public function poisk(Request $request)
    {   
        // Search
        $product = $request->input('q');

        if (!$product) {
            return redirect('/');
        }

        $product = htmlspecialchars($product);

        $products = \App\Models\Product::where('title', 'like', "%{$product}%")
                                        ->orWhere('text', 'like', "%{$product}%")
                                        ->get();

        if (!$products) {
            return redirect('/');
        };

        // Categories
        // Get all categories
        $categories = \App\Models\Category::all();

        // Get parent categories
        $parent_category = $categories->where('parent', '0');

        // Get child categories
        foreach($parent_category as $pct) {
            $child_category = $categories->where('parent', $pct->id);
            if (count($child_category) > 0) {
                $pct->child_category = $child_category;
            }
        }

        return view('poisk', compact('products', 'parent_category'));
    }

    public function ajax_addtocart() {
        return false;
    }

    public function clear_cart()
    {   
        session()->pull('cart', 'default');
        return redirect('/cart');
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
        $text = \App\Models\Page::where('id', '2')
                            ->value('text');

        return view('stat_partnerom', compact('text'));
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


    public function ajax_search(Request $request)
    {   
        $product = $request->input('product');

        if (!$product) {
            return false;
        }

        $product = htmlspecialchars($product);

        $products = \App\Models\Product::where('title', 'like', "%{$product}%")
                                        ->orWhere('text', 'like', "%{$product}%")
                                        ->get();

        $products_array = [];

        if ($products && count($products) > 0) {
            foreach ($products as $value) {
                $product_item = [];
                $product_item['title'] = $value->title;
                $product_item['price'] = $value->retail_price;
                $product_item['slug'] = $value->slug;
                $products_array[] = $product_item;
            }
        } else {
            return false;
        }

        $products_array = json_encode($products_array, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

        return $products_array;
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
