<?php

namespace App\Http\Controllers;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SubCategory::all();
    }

    public function getByCategory($category_id){
        return 
        SubCategory::where('category_id', $category_id)
        ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
        ->select('sub_categories.*', 'categories.category_name')
        ->get();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory = SubCategory::create($request->all());

        return response()->json($subcategory, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return SubCategory::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategory=SubCategory::findOrFail($id);

        $subcategory->update($request->all());

        return response()->json($subcategory, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $subcategory->delete();

        return response()->json(null, 204);
    }
}
