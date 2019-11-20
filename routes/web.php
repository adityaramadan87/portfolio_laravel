<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'Web\HomeController@index')->name('home');
Route::get('/skills', 'Web\SkillsController@index')->name('skills');
Route::get('/contact', 'Web\ContactController@index')->name('contact');
Route::get('/project', 'Web\ProjectsController@index')->name('project');
