<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/categories', CategoryController::class);
Route::resource('/subcategories', SubCategoryController::class);
Route::resource('/bigcities', BigCityController::class);
Route::resource('/cities', CityController::class);
Route::resource('/ads', AdsController::class);
Route::resource('/adsimages', AdImageController::class);
Route::resource('/images', ImageController::class);
