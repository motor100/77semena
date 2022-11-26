<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = \App\Models\City::orderBy('id', 'desc')->get();

        return view('dashboard.cities', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cities-create');
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
            'region' => 'required|min:3|max:200',
        ]);

        $title = $request->input('title');
        $region = $request->input('region');

        $now = date('Y-m-d H:i:s');

        $city = new City([
            'title' => $title,
            'region' => $region,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $city->save();

        return redirect('/dashboard/cities');
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
        $city = City::find($id);

        return view('dashboard.cities-edit', compact('city'));
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
            'title' => 'required|min:3|max:200',
            'region' => 'required|min:3|max:200',
        ]);

        $id = $request->input('id');

        $city = City::find($id);

        $title = $request->input('title');
        $region = $request->input('region');

        $now = date('Y-m-d H:i:s');

        $city->update([
            'title' => $title,
            'region' => $region,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        return redirect('/dashboard/cities');
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
}
