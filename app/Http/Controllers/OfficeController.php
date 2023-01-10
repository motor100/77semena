<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = Office::orderBy('id', 'desc')->get();
        
        return view('dashboard.offices', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $cities = \App\Models\City::all();

        return view('dashboard.offices-create', compact('cities'));
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
            'address' => 'required|min:3|max:200',
            'coords' => 'required|min:10|max:25',
            'time_weekday' => 'required'
        ]);

        $title = $request->input('title');
        $city = $request->input('city');
        $address = $request->input('address');
        $coords = $request->input('coords');
        $description = $request->input('description');
        $time_weekday = $request->input('time_weekday');
        $time_saturday = $request->input('time_saturday');
        $time_sunday = $request->input('time_sunday');

        $now = date('Y-m-d H:i:s');

        // $description = nl2br($description);

        $office = new Office([
            'city_id' => $city,
            'title' => $title,
            'address' => $address,
            'coords' => $coords,
            'description' => $description,
            'time_weekday' => $time_weekday,
            'time_saturday' => $time_saturday,
            'time_sunday' => $time_sunday,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $office->save();

        return redirect('/admin/offices');
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
        $office = Office::find($id);
        
        $city = \App\Models\City::all();

        $current_city = $city->where('id', $office->city_id)->first();

        return view('dashboard.offices-edit', compact('office', 'city', 'current_city'));
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
            'address' => 'required|min:3|max:200',
            'coords' => 'required|min:10|max:25',
            'time_weekday' => 'required'
        ]);

        $id = $request->input('id');

        $office = Office::find($id);

        $title = $request->input('title');
        $city = $request->input('city');
        $address = $request->input('address');
        $coords = $request->input('coords');
        $description = $request->input('description');
        $time_weekday = $request->input('time_weekday');
        $time_saturday = $request->input('time_saturday');
        $time_sunday = $request->input('time_sunday');

        $now = date('Y-m-d H:i:s');

        // $description = nl2br($description);

        $office->update([
            'city_id' => $city,
            'title' => $title,
            'address' => $address,
            'coords' => $coords,
            'description' => $description,
            'time_weekday' => $time_weekday,
            'time_saturday' => $time_saturday,
            'time_sunday' => $time_sunday,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        return redirect('/admin/offices');
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
