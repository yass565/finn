<?php

namespace App\Http\Controllers;

use App\Modele;
use Illuminate\Http\Request;

class ModeleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Modele::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modeles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modele = Modele::create($request->all());

        return response()->json($modele, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function show(Modele $id)
    {
        return Modele::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function edit(Modele $modele)
    {
        return view('modeles.edit', compact('modele'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modele $id)
    {
        $modele=Modele::findOrFail($id);

        $modele->update($request->all());

        return response()->json($modele, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modele $id)
    {
        $modele = Modele::findOrFail($id);
        $modele->delete();

        return response()->json(null, 204);
    }
}
