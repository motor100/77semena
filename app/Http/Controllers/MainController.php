<?php

namespace App\Http\Controllers;

// use App\Models\Testimonial;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;


class MainController extends Controller
{
    public function home()
    {
        $news = \App\Models\Mainnew::limit(4)->orderBy('id', 'desc')->get();
        
        foreach ($news as $nw) {
            $nw->short_title = Str::limit($nw->title, 36, '...');
            $nw->date = MainController::datetime_format($nw->created_at, 2);
        }

        $new_products = Product::orderBy('id', 'desc')->limit(4)->get();

        foreach($new_products as $pr => $value) {
            $value->count = $pr;
        }

        $promo_products = Product::whereNotNull('promo_price')
                                    ->where('stock', '>', '0')
                                    ->limit(6)
                                    ->orderBy('id', 'desc')
                                    ->get();

        foreach($promo_products as $pr => $value) {
            $value->count = $pr;
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
            $products = Product::where('category_id', $category->id)->orderBy('id', 'desc')->get();
            $products_count = $products->count();
            $products = $products->take(20);
            $category_title = $category->title;

            $step = 20;
            $page_max = ceil( $products_count / $step);

            return view('catalog', compact('products', 'parent_category', 'category_title', 'products_count', 'page_max'));
        } else {
            $products = Product::orderBy('id', 'desc')->get();
            $products_count = $products->count();
            $products = $products->take(20);

            $step = 20;
            $page_max = ceil( $products_count / $step);

            return view('catalog', compact('products', 'parent_category', 'products_count', 'page_max'));
        }
    }

    public function single_product($slug)
    {
        if (is_string($slug) && strlen($slug) > 3 && strlen($slug) < 100) {

            $single_product = Product::where('slug', $slug)->first();

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
            $nw->short_title = Str::limit($nw->title, 36, '...');
            $nw->date = MainController::datetime_format($nw->created_at, 2);
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
        
        $single_novosti->date = MainController::datetime_format($single_novosti->created_at, 1);

        return view('single_novosti', compact('single_novosti'));
    }

    public function otzyvy()
    {   
        $testimonials = \App\Models\Testimonial::limit(100)
                                            ->whereNotNull('publicated_at')
                                            ->orderBy('id', 'desc')
                                            ->get();

        foreach ($testimonials as $ts) {
            $ts->date = MainController::datetime_format($ts->created_at, 3);
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

        $products_in_stock = collect();
        $products_out_of_stock = collect();

        if ($cart_items) {
            $key_items = array_keys($cart_items);

            $products = Product::whereIn('id', $key_items)->get();

            // $filtered = $products->filter(function ($value, $key) {
            //     return $value->stock == 0;
            // });
            
            // $filtered->all();

            foreach ($products as $pr) {
                if($pr->stock > 0) {
                    $products_in_stock[] = $pr;
                } else {
                    $products_out_of_stock[] = $pr;
                }
            }

            foreach ($products_in_stock as $pr => $value) {
                $id = $value->id;
                $value->quantity = $cart_items[$id];
                $value->count = $pr;
            }

            foreach ($products_out_of_stock as $pr => $value) {
                $id = $value->id;
                $value->quantity = $cart_items[$id];
                $value->count = $pr;
            }
        }

        // dd($products_out_of_stock);

        return view('cart', compact('products_in_stock', 'products_out_of_stock'));
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

    public function ajax_addtocart(Request $request)
    {
        $id = $request->input('id');

        $cart_items = $request->session()->get('cart');

        if ($cart_items) { // Если есть сессия cart, то добавляю в конец массива
            if(count($cart_items) < 9) { // Количество товара в корзине менее 10
                if (array_key_exists($id, $cart_items)) { // Если есть товар, то прибавляю количество
                    $product_count = $cart_items[$id];
                    $request->session()->put('cart.'.$id, ($product_count + 1));
                    $count = count($request->session()->get('cart'));
            
                    return $count;
                } else {
                    $request->session()->put('cart.'.$id, 1);
                    $count = count($request->session()->get('cart'));
            
                    return $count;
                }
            } else {
                return false;
            }
        } else { // Если нет, то создаю массив cart и добавляю туда значение 
            $request->session()->put('cart', [$id => 1]);
            $count = count($request->session()->get('cart'));
            
            return $count;
        }
    }

    public function ajax_rmitemfromcart(Request $request)
    {   
        $id = $request->input('id');

        $request->session()->pull('cart.'.$id, 'default');

        $count = count($request->session()->get('cart'));

        return $count;
    }

    public function ajax_productsviewmore(Request $request)
    {
        $page = 2;

        $start = 20;
        $step = 20;

        $products = \App\Models\Product::offset($start)
                        ->limit($step)
                        ->orderBy('id', 'desc')
                        ->get();

        $array = [];

        foreach ($products as $prd) {
            $html = '';
            $html .= '<div class="products-item">';
            $html .= '<div class="products-item__image">';
            $html .= '<img src="/storage/uploads/products/' .  $prd->image . '" alt="">';
            $html .= '</div>';
            $html .= '<div class="products-item__title">' . $prd->title . '</div>';
            if($prd->stock > 0) {
                $html .= '<div class="products-item__info info-yellow">Хит</div>';
            } else {
                $html .= '<div class="products-item__info info-grey">Нет в наличии</div>';
            }
            $html .= '<div class="products-item__price">';
            $html .= '<span class="products-item__value">' . $prd->retail_price . '</span>';
            $html .= '<span class="products-item__currency">&nbsp;&#8381;</span>';
            $html .= '</div>';
            if($prd->stock > 0) {
                $html .= '<div class="add-to-cart-btn add-to-cart" data-id="{{ $pr->id }}">';
                $html .= '<div class="circle"></div>';
                $html .= '</div>';
            } else {
                $html .= '<div class="pre-order-btn add-to-cart" data-id="' . $prd->id . '">Предзаказ</div>';
            }
            $html .= '<a href="/catalog/' . $prd->slug . '" class="full-link"></a>';
            $html .= '</div>';
            $array[] = $html;
        }

        return $array;

    }

    public function rmfromcart(Request $request)
    {   
        $id = $request->input('id');

        $request->session()->pull('cart.'.$id, 'default');

        return redirect('/cart');
    }

    public function clear_cart()
    {   
        session()->pull('cart', 'default');
        return redirect('/cart');
    }

    public function novinki()
    {   
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
        $products = \App\Models\Product::limit(20)->orderBy('id', 'desc')->get();

        return view('novinki', compact('products', 'parent_category'));
    }

    public function akcii()
    {   
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
        $products = \App\Models\Product::whereNotNull('promo_price')
                                        ->where('stock', '>', '0')
                                        ->limit(20)
                                        ->orderBy('id', 'desc')
                                        ->get();

        return view('akcii', compact('products', 'parent_category'));
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
