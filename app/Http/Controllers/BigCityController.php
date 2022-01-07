<?php

namespace App\Http\Controllers;
use App\BigCity;

use Illuminate\Http\Request;

class BigCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BigCity::with('Cities')
        ->get();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bigcities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bigcity = BigCity::create($request->all());

        return response()->json($bigcity, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BigCity  $bigcity
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return BigCity::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BigCity  $bigcity
     * @return \Illuminate\Http\Response
     */
    public function edit(BigCity $bigcity)
    {
        return view('bigcities.edit', compact('bigcity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BigCity  $bigcity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bigcity=BigCity::findOrFail($id);

        $bigcity->update($request->all());

        return response()->json($bigcity, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BigCity  $bigcity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bigcity = BigCity::findOrFail($id);
        $bigcity->delete();

        return response()->json(null, 204);
    }
}
