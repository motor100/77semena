<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = \App\Models\Category::where('parent', '0')->get();
        $subcategories = \App\Models\Category::where('parent', '>', '0')->get();

        return view('dashboard.category', compact('categories', 'subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('dashboard.category-create');
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
            'title' => 'required|min:3|max:200',
        ]);

        $title = $request->input('title');
        $parent = $request->input('parent');

        $slug = Str::slug($title);

        $now = date('Y-m-d H:i:s');

        // Проверка на уникальный slug
        $have_slug = Category::where('slug', $slug)
                            ->get();
        if (count($have_slug) > 0) {
            $newslug = $slug . '-%';
            $slugs = Category::where('slug', 'like', $newslug)
                            ->get();
            $count_slugs = count($slugs) + 1;
            $slug = $slug . '-' . $count_slugs;
        }

        if($parent) {
            $cat = Category::where('id', $parent)->first();
            $cat->update([
                'count_children' => $cat->count_children + 1,
            ]);
        } else {
            $parent = 0;
        }

        $category = new Category([
            'title' => $title,
            'parent' => $parent,
            'slug' => $slug,
            'count_children' => 0,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $category->save();

        return redirect('/admin/category');
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
        $ct = Category::find($id);

        $parent_ct = Category::where('parent', '0')->get();

        $current_ct = $parent_ct->where('id', $ct->parent)->first();

        return view('dashboard.category-edit', compact('ct', 'parent_ct', 'current_ct'));
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
        ]);

        $id = $request->input('id');
        $parent = $request->input('parent');

        $ct = Category::find($id);

        $title = $request->input('title');

        $slug = Str::slug($title);

        $now = date('Y-m-d H:i:s');

        if($slug != $ct->slug) {
            // Проверка на уникальный slug
            $have_slug = Category::where('slug', $slug)
                                ->get();
            if (count($have_slug) > 0) {
                $newslug = $slug . '-%';
                $slugs = Category::where('slug', 'like', $newslug)
                                ->get();
                $count_slugs = count($slugs) + 1;
                $slug = $slug . '-' . $count_slugs;
            }
        }

        if ($ct->parent == 0) {
            $parent = $ct->parent;
        } else {

            // $ct->parent текущая
            // $parent новая
            $old_cat = Category::where('id', $ct->parent)->first();
            $old_cat->update([
                'count_children' => $old_cat->count_children - 1,
            ]);

            $new_cat = Category::where('id', $parent)->first();
            $new_cat->update([
                'count_children' => $new_cat->count_children + 1,
            ]);
            // -1 у текущей
            // +1 у новой
        }

        // dd($parent);

        $ct->update([
            'title' => $title,
            'parent' => $parent,
            'slug' => $slug,
            'count_children' => 0,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function subcategory_create()
    {   
        $parent_ct = Category::where('parent', '0')->get();

        return view('dashboard.subcategory-create', compact('parent_ct'));
    }
}
