<?php

namespace App\Http\Controllers;

use App\Models\Mainnew;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MainnewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Mainnew::orderBy('id', 'desc')->paginate(20);
        
        return view('dashboard.novosti', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('dashboard.novosti-create');
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
            'input-main-file' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        $title = $request->input('title');
        $text = $request->input('text');
        $image = $request->file('input-main-file');

        $slug = Str::slug($title);

        $now = date('Y-m-d H:i:s');

        // Проверка на уникальный slug
        $have_slug = Mainnew::where('slug', $slug)
                            ->get();
        if (count($have_slug) > 0) {
            $newslug = $slug . '-%';
            $slugs = Mainnew::where('slug', 'like', $newslug)
                            ->get();
            $count_slugs = count($slugs) + 1;
            $slug = $slug . '-' . $count_slugs;
        }

        $folder = 'news';

        $img = \App\Http\Controllers\Admin\AdminController::rename_file($slug, $image, $folder);

        $news = new Mainnew([
            'title' => $title,
            'slug' => $slug,
            'image' => $img,
            'text' => $text,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $news->save();

        return redirect('/admin/novosti');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mainnew  $mainnew
     * @return \Illuminate\Http\Response
     */
    public function show(Mainnew $mainnew, $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mainnew  $mainnew
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $nw = Mainnew::find($id);

        return view('dashboard.novosti-edit', compact('nw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mainnew  $mainnew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6|max:200',
        ]);

        $id = $request->input('id');

        $nw = Mainnew::find($id);

        $title = $request->input('title');
        $text = $request->input('text');
        $image = $request->file('input-main-file');

        $slug = Str::slug($title);

        $now = date('Y-m-d H:i:s');

        // Проверка на уникальный slug
        $have_slug = Mainnew::where('slug', $slug)
                            ->get();
        if (count($have_slug) > 0) {
            $newslug = $slug . '-%';
            $slugs = Mainnew::where('slug', 'like', $newslug)
                            ->get();
            $count_slugs = count($slugs) + 1;
            $slug = $slug . '-' . $count_slugs;
        }

        $folder = 'news';

        if($image) {
            if (Storage::disk('public')->exists('/uploads/news/' . $nw->image)) {
                Storage::disk('public')->delete('/uploads/news/' . $nw->image);
            }
            $img = \App\Http\Controllers\Admin\AdminController::rename_file($slug, $image, $folder);
        } else {
            $img = $nw->image;
        }

        $nw->update([
            'title' => $title,
            'slug' => $slug,
            'image' => $img,
            'text' => $text,
            'updated_at' => $now
        ]);

        return redirect('/admin/novosti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mainnew  $mainnew
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $nw = Mainnew::find($id);

        if (Storage::disk('public')->exists('/uploads/news/' . $nw->image)) {
            Storage::disk('public')->delete('/uploads/news/' . $nw->image);
        }

        $nw->delete();

        return redirect('/admin/novosti');
    }
}
