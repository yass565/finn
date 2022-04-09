<?php

namespace App\Http\Controllers;

use App\Modell;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Modell::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('models.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = Modell::create($request->all());

        return response()->json($model, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modell  $modell
     * @return \Illuminate\Http\Response
     */
    public function show(Modell $id)
    {
        return Modell::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modell  $modell
     * @return \Illuminate\Http\Response
     */
    public function edit(Modell $modell)
    {
        return view('models.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modell  $modell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modell $id)
    {
        $model=Modell::findOrFail($id);

        $model->update($request->all());

        return response()->json($model, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modell  $modell
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modell $id)
    {
        $model = Modell::findOrFail($id);
        $model->delete();

        return response()->json(null, 204);
    }
}
