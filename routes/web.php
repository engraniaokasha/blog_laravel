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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index','blogsController@index')->name('index');
Route::get('/create','blogsController@create');
Route::post('/store','blogsController@store');
Route::get('/show_blog/{id}','blogsController@show');
Route::get('/edit/{id}','blogsController@edit');
Route::post('/update/{id}','blogsController@update');
Route::get('/delete/{id}','blogsController@delete');

