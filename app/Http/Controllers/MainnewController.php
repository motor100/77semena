<?php

namespace App\Http\Controllers;

use App\Models\Mainnew;
use Illuminate\Http\Request;

class MainnewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('novosti-create');
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
        ]);

        $news = new Mainnew([
            'title' => $request->get('title'), 
        ]);

        $news->save();

        return redirect('/crud');
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
    public function edit(Mainnew $mainnew)
    {
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mainnew  $mainnew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mainnew $mainnew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mainnew  $mainnew
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mainnew $mainnew)
    {
        //
    }
}
