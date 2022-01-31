<?php

namespace App\Http\Controllers;
use Symfony\Component\Console\Output\ConsoleOutput;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::with('CategoryParent', 'categoriesFils')
        ->get();
    }

    public function getCategories()
    {
        return Category::where('parent_category_id', null)
        ->with('CategoriesFils')
        ->get();
    }

    public function getAdsByCategory($category_id)
    {
        return Category::find($category_id)->ads()
        ->join('cities', 'cities.id', '=', 'ads.city_id')
        ->join('big_cities', 'big_cities.id', '=', 'ads.big_city_id')
        ->select('ads.*', 'cities.city_name', 'big_cities.bcity_name')
        ->get();
    }

    public function getAdsByCategories(Request $request)
    {
        $categories_ids=request()->get('categories_ids');
        $bcities_ids=request()->get('bcities_ids');
        $cities_ids=request()->get('cities_ids');
        $ads=[];
        
        foreach($categories_ids as $category_name) {
            if($bcities_ids==null && $cities_ids==null){
                foreach(Category::find($category_name)->ads()->get() as $ad)
                array_push($ads, $ad);
            }
            else if($bcities_ids!=null && $cities_ids==null){
                foreach(Category::find($category_name)->ads()
                ->join('cities', 'cities.id', '=', 'ads.city_id')
                ->join('big_cities', 'big_cities.id', '=', 'ads.big_city_id')
                ->whereIn('big_cities.id', $bcities_ids)
                ->get() as $ad)
                array_push($ads, $ad);
            }
            else {
                foreach(Category::find($category_name)->ads()
                ->join('cities', 'cities.id', '=', 'ads.city_id')
                ->join('big_cities', 'big_cities.id', '=', 'ads.big_city_id')
                ->whereIn('big_cities.id', $bcities_ids)
                ->whereIn('cities.id', $cities_ids)
                ->get() as $ad)
                array_push($ads, $ad);
            }
            
            
            
        }

        return $ads;
    }

    public function getCategory($category_id){
        return 
        Category::with('CategoryParent', 'Ads', 'CategoriesFils')
        ->where('parent_category_id', $category_id)
        ->get();

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create($request->all());

        return response()->json($category, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Category::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category=Category::findOrFail($id);

        $category->update($request->all());

        return response()->json($category, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json(null, 204);
    }
}
