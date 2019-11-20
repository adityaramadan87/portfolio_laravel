<?php

use Faker\Provider\Image;
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->group( function() {
    Route::resource('projects', 'API\ProjectController');
});
Route::get('/show', 'API\ProjectController@show');
Route::post('/store', 'API\ProjectController@store');
Route::post('/update/{id}', 'API\ProjectController@update');
Route::get('/delete/{id}', 'API\ProjectController@destroy');
Route::get('/public/image/{filename}', function ($filename)
{
    return Image::make(public_path('public/image/' . $filename))->response();
});
