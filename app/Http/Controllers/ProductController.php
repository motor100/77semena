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
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->limit(50)->get();
        
        return view('dashboard.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products-create');
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
            'code' => 'required|min:10|max:16',
            'quantity' => 'required|min:0|max:10000',
            'wholesale-price' => 'required|min:0',
            'retail-price' => 'required|min:0',
        ]);

        $title = $request->input('title');
        $text = $request->input('text');
        $image = $request->file('input-main-file');
        $gallery = $request->file('input-gallery-file');
        $code = $request->input('code');
        $quantity = $request->input('quantity');
        $code = $request->input('code');
        $wholesale_price = $request->input('wholesale-price');
        $retail_price = $request->input('retail-price');
        $sku = $request->input('sku');
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

        $folder = 'products';

        $img = \App\Http\Controllers\Admin\AdminController::rename_file($slug, $image, $folder);

        $product = new Product([
            'title' => $title,
            'slug' => $slug,
            'image' => $img,
            'text' => $text,
            'code' => $code,
            'quantity' => $quantity,
            'wholesale_price' => $wholesale_price,
            'retail_price' => $retail_price,
            'sku' => $sku,
            'weight' => $weight,
            'brand' => $brand,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $product->save();

        $id = $product->id;

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

        return redirect('/dashboard/products');
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

        return view('dashboard.products-edit', compact('pr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:6|max:200',
            'input-main-file' => 'required|image|mimes:jpg,png,jpeg',
            'code' => 'required|min:10|max:16',
            'quantity' => 'required|min:0|max:10000',
            'wholesale-price' => 'required|min:0',
            'retail-price' => 'required|min:0',
        ]);

        $id = $request->input('id');

        $pr = Product::find($id);

        $title = $request->input('title');
        $text = $request->input('text');
        $image = $request->file('input-main-file');
        $gallery = $request->file('input-gallery-file');
        $code = $request->input('code');
        $quantity = $request->input('quantity');
        $code = $request->input('code');
        $wholesale_price = $request->input('wholesale-price');
        $retail_price = $request->input('retail-price');
        $sku = $request->input('sku');
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

        $folder = 'products';

        if($image) {
            if (Storage::disk('public')->exists($pr->image)) {
                Storage::disk('public')->delete($pr->image);
            }
            $img = \App\Http\Controllers\Admin\AdminController::rename_file($slug, $image, $folder);
        } else {
            $img = $pr->image;
        }

        if($gallery) {
            $old_gallery = Gallery::where('product_id', $id)->get();
            foreach($old_gallery as $gl) {
                if (Storage::disk('public')->exists($gl->image)) {
                    Storage::disk('public')->delete($gl->image);
                }
            }
            $old_gallery->delete();            

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

        

        return redirect('/dashboard/novosti');

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

        if (Storage::disk('public')->exists($prd->image)) {
            Storage::disk('public')->delete($prd->image);
        }

        $prd->delete();

        return redirect('/dashboard/products');
    }
}
