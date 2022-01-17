<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ads::all();
    }

    public function getPopularAds(){
        return Ads::with('Categories')
        ->where('ads_status', 'populaire')
        ->join('cities', 'cities.id', '=', 'ads.city_id')
        ->join('big_cities', 'big_cities.id', '=', 'ads.big_city_id')
        ->select('ads.*', 'cities.city_name', 'big_cities.bcity_name')
        ->get();

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad = Ads::create($request->all());

        return response()->json($ad, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ads  $ad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Ads::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ads $ad)
    {
        return view('ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ad=Ads::findOrFail($id);

        $ad->update($request->all());

        return response()->json($ad, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ads::findOrFail($id);
        $ad->delete();

        return response()->json(null, 204);
    }
}
