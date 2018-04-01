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
*

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::redirect('/', 'restaurant');

Auth::routes();

Route::get('restaurant', 'Web\PageController@restaurant')->name('restaurant');

Route::get('restaurant/{id}','Web\PageController@menu')->name('menu');