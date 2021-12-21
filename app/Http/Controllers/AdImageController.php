<?php

namespace App\Http\Controllers;

use App\AdImage;
use Illuminate\Http\Request;

class AdImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AdImage::all();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adImages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adImage = AdImage::create($request->all());

        return response()->json($adImage, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdImage  $adImage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return AdImage::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdImage  $adImage
     * @return \Illuminate\Http\Response
     */
    public function edit(AdImage $adImage)
    {
        return view('adImages.edit', compact('adImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdImage  $adImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $adImage=AdImage::findOrFail($id);

        $adImage->update($request->all());

        return response()->json($adImage, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdImage  $adImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adImage = AdImage::findOrFail($id);
        $adImage->delete();

        return response()->json(null, 204);
    }
}
