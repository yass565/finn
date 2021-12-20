<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('api')->group(function () {
//     Route::resource('categories', CategoryController::class);
// });

// Route::middleware('api')->group(function () {
//     Route::resource('subcategories', SubCategoryController::class);
// });

Route::get('subcategories', 'SubCategoryController@index');
 
Route::get('subcategories/{id}', 'SubCategoryController@show');

Route::post('subcategories', 'SubCategoryController@store');

Route::put('subcategories/{id}', 'SubCategoryController@update');

Route::delete('subcategories/{id}', 'SubCategoryController@delete');



Route::get('categories', 'CategoryController@index');
 
Route::get('categories/{id}', 'CategoryController@show');

Route::post('categories', 'CategoryController@store');

Route::put('categories/{id}', 'CategoryController@update');

Route::delete('categories/{id}', 'CategoryController@delete');



