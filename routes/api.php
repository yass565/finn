<?php

use App\User;
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


// Route::middleware('api')->group(function () {
//     Route::resource('categories', CategoryController::class);
// });

// Route::middleware('api')->group(function () {
//     Route::resource('subcategories', SubCategoryController::class);
// });

Route::get('subcategories', 'SubCategoryController@index');

Route::get('categories/{category_id}/subcategories', 'CategoryController@getCategory');
 
Route::get('subcategories/{id}', 'SubCategoryController@show');

Route::post('subcategories', 'SubCategoryController@store');

Route::put('subcategories/{id}', 'SubCategoryController@update');

Route::delete('subcategories/{id}', 'SubCategoryController@delete');



Route::get('categories', 'CategoryController@getCategories');
 
Route::get('categories/{id}', 'CategoryController@show');

Route::post('categories', 'CategoryController@store');

Route::put('categories/{id}', 'CategoryController@update');

Route::delete('categories/{id}', 'CategoryController@delete');


Route::get('bigcities', 'BigCityController@index');
 
Route::get('bigcities/{id}', 'BigCityController@show');

Route::post('bigcities', 'BigCityController@store');

Route::put('bigcities/{id}', 'BigCityController@update');

Route::delete('bigcities/{id}', 'BigCityController@delete');



Route::get('cities', 'CityController@index');
 
Route::get('cities/{id}', 'CityController@show');

Route::post('cities', 'CityController@store');

Route::put('cities/{id}', 'CityController@update');

Route::delete('cities/{id}', 'CityController@delete');



Route::get('ads', 'AdsController@index');

Route::get('ads/popular', 'AdsController@getPopularAds');

Route::get('category/{category_id}/ads', 'CategoryController@getAdsByCategory');

Route::get('categories/{categories_names}/ads', 'CategoryController@getAdsByCategories');
 
Route::get('ads/subcategory/{subcategory_id}', 'AdsController@getBySubCategory');

Route::get('ads/{id}', 'AdsController@show');

Route::post('ads', 'AdsController@store');

Route::put('ads/{id}', 'AdsController@update');

Route::delete('ads/{id}', 'AdsController@delete');



Route::get('adsimages', 'AdImageController@index');
 
Route::get('adsimages/{id}', 'AdImageController@show');

Route::post('adsimages', 'AdImageController@store');

Route::put('adsimages/{id}', 'AdImageController@update');

Route::delete('adsimages/{id}', 'AdImageController@delete');



Route::get('images', 'ImageController@index');
 
Route::get('images/{id}', 'ImageController@show');

Route::post('images', 'ImageController@store');

Route::put('images/{id}', 'ImageController@update');

Route::delete('images/{id}', 'ImageController@delete');


// Route::post('/login', 'Auth\AuthController@login')->name('login.api');
// Route::post('/register','Auth\AuthController@register')->name('register.api');

// Route::middleware('auth:api')->group(function () {
//     Route::post('/logout', 'Auth\AuthUserController@logout')->name('logout.api');
// });

Route::get('users', function(){
    return User::all();
});

Route::group(['namespace'=>'Api\Auth'], function(){
    Route::post('/login', 'AuthUserController@login');
    Route::get('/logout', 'AuthUserController@logout')->middleware('auth:api');

    Route::post('/register', 'RegisterController@registerUser');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
