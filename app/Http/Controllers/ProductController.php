<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $title = $request->input('q');

        $products = '';

        if($title) {
            $code = htmlspecialchars($title);
            $products = \App\Models\Product::where('title', 'like', "%{$title}%")->get();
        } else {
            $products = Product::orderBy('id', 'desc')->limit(20)->get();
        }
        
        return view('dashboard.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = \App\Models\Category::where('count_children', 0)->get();

        return view('dashboard.products-create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'title' => 'required|min:6|max:200',
            'input-main-file' => 'required|image|mimes:jpg,png,jpeg',
            'code' => 'required|min:10|max:16|unique:App\Models\Product,code',
            'stock' => 'required|min:0|max:10000',
            'buying-price' => 'required|min:0',
            'wholesale-price' => 'required|min:0',
            'retail-price' => 'required|min:0',
            'weight' => 'required|min:1',
        ]);

        $title = $request->input('title');
        $category = $request->input('category');
        $text = $request->input('text');
        $image = $request->file('input-main-file');
        $gallery = $request->file('input-gallery-file');
        $code = $request->input('code');
        $stock = $request->input('stock');
        $code = $request->input('code');
        $buying_price = $request->input('buying-price');
        $wholesale_price = $request->input('wholesale-price');
        $retail_price = $request->input('retail-price');
        $promo_price = $request->input('promo-price');
        $weight = $request->input('weight');
        $brand = $request->input('brand');

        $slug = Str::slug($title);

        $now = date('Y-m-d H:i:s');

        // Проверка на уникальный slug
        $have_slug = Product::where('slug', $slug)
                            ->get();
        if (count($have_slug) > 0) {
            $newslug = $slug . '-%';
            $slugs = Product::where('slug', 'like', $newslug)
                            ->get();
            $count_slugs = count($slugs) + 1;
            $slug = $slug . '-' . $count_slugs;
        }

        if(!$promo_price) {
            $promo_price = NULL;
        }

        $folder = 'products';

        $img = \App\Http\Controllers\Admin\AdminController::rename_file($slug, $image, $folder);

        $product = new Product([
            'title' => $title,
            'slug' => $slug,
            'category_id' => $category,
            'image' => $img,
            'text' => $text,
            'code' => $code,
            'stock' => $stock,
            'buying_price' => $buying_price,
            'wholesale_price' => $wholesale_price,
            'retail_price' => $retail_price,
            'promo_price' => $promo_price,
            'weight' => $weight,
            'brand' => $brand,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $product->save();

        $id = $product->id;

        if($gallery) {
            $gallery_array = [];
            foreach($gallery as $gl) {
                $gallery_item = [];
                $gallery_item["product_id"] = $id;
                $gallery_item["image"] = \App\Http\Controllers\Admin\AdminController::rename_file($slug, $gl, $folder);
                $gallery_item["created_at"] = $now;
                $gallery_item["updated_at"] = $now;
                $gallery_array[] = $gallery_item;
            }

            Gallery::insert($gallery_array);
        }

        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $pr = Product::find($id);

        $category = \App\Models\Category::where('count_children', 0)->get();

        $current_category = $category->where('id', $pr->category_id)->first();

        return view('dashboard.products-edit', compact('pr', 'category', 'current_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6|max:200',
            'code' => 'required|min:10|max:16',
            'stock' => 'required|min:0|max:10000',
            'buying-price' => 'required|min:0',
            'wholesale-price' => 'required|min:0',
            'retail-price' => 'required|min:0',
            'weight' => 'required|min:1',
        ]);

        $id = $request->input('id');

        $pr = Product::find($id);

        $title = $request->input('title');
        $category = $request->input('category');
        $text = $request->input('text');
        $image = $request->file('input-main-file');
        $gallery = $request->file('input-gallery-file');
        $code = $request->input('code');
        $stock = $request->input('stock');
        $code = $request->input('code');
        $buying_price = $request->input('buying-price');
        $wholesale_price = $request->input('wholesale-price');
        $retail_price = $request->input('retail-price');
        $promo_price = $request->input('promo-price');
        $weight = $request->input('weight');
        $brand = $request->input('brand');

        $slug = Str::slug($title);

        $now = date('Y-m-d H:i:s');

        if($slug != $pr->slug) {
            // Проверка на уникальный slug
            $have_slug = Product::where('slug', $slug)
                                ->get();
            if (count($have_slug) > 0) {
                $newslug = $slug . '-%';
                $slugs = Product::where('slug', 'like', $newslug)
                                ->get();
                $count_slugs = count($slugs) + 1;
                $slug = $slug . '-' . $count_slugs;
            }
        }

        if(!$promo_price) {
            $promo_price = NULL;
        }

        $folder = 'products';

        if($image) {
            if (Storage::disk('public')->exists('/uploads/products/' . $pr->image)) {
                Storage::disk('public')->delete('/uploads/products/' . $pr->image);
            }
            $img = \App\Http\Controllers\Admin\AdminController::rename_file($slug, $image, $folder);
        } else {
            $img = $pr->image;
        }

        if($gallery) {
            $old_gallery = Gallery::where('product_id', $id)->get();
            foreach($old_gallery as $gl) {
                if (Storage::disk('public')->exists('/uploads/products/' . $gl->image)) {
                    Storage::disk('public')->delete('/uploads/products/' . $gl->image);
                }
            }

            Gallery::where('product_id', $id)->delete();

            $gallery_array = [];
            foreach($gallery as $gl) {
                $gallery_item = [];
                $gallery_item["product_id"] = $id;
                $gallery_item["image"] = \App\Http\Controllers\Admin\AdminController::rename_file($slug, $gl, $folder);
                $gallery_item["created_at"] = $now;
                $gallery_item["updated_at"] = $now;
                $gallery_array[] = $gallery_item;
            }

            Gallery::insert($gallery_array);
        }

        $pr->update([
            'title' => $title,
            'slug' => $slug,
            'category_id' => $category,
            'image' => $img,
            'text' => $text,
            'code' => $code,
            'stock' => $stock,
            'buying_price' => $buying_price,
            'wholesale_price' => $wholesale_price,
            'retail_price' => $retail_price,
            'promo_price' => $promo_price,
            'weight' => $weight,
            'brand' => $brand,
            'updated_at' => $now
        ]);

        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prd = Product::find($id);

        // Удаление файла product image
        if (Storage::disk('public')->exists('/uploads/products/' . $prd->image)) {
            Storage::disk('public')->delete('/uploads/products/' . $prd->image);
        }

        // Удаление файлов gallery images 
        foreach($prd->galleries as $gl) {
            if (Storage::disk('public')->exists('/uploads/products/' . $gl->image)) {
                Storage::disk('public')->delete('/uploads/products/' . $gl->image);
            }
        }

        $prd->delete();

        return redirect('/admin/products');
    }
}
