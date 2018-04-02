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


//Web
Route::get('restaurant', 'Web\PageController@restaurant')->name('restaurant');
Route::get('menu/{name}','Web\PageController@menu')->name('menu');
Route::get('pedir-menu/{dish_id}','Web\PageController@pedir')->name('pedir-menu');
Route::get('ver-carta-dia/{restaurant_id}','Web\PageController@ver_carta')->name('ver-carta-dia');
//Admin

Route::get('restaurant-schedule/{restaurant_id}','Admin\ScheduleController@index2')->name('restaurant-schedule');
Route::get('schedules-create/{restaurant_id}','Admin\ScheduleController@create')->name('schedules-create');
Route::get('restaurant-carta-del-dia/{restaurant_id}','Admin\MenuController@createMenu')->name('restaurant-carta-del-dia');

Route::resource('dishes','Admin\DishController');
Route::resource('schedules','Admin\ScheduleController');
Route::resource('menus','Admin\MenuController');
Route::resource('orders','Admin\OrderController');

Route::get('factura/{order_id}/{precio_total}','Admin\OrderController@factura')->name('factura');

//Route::get('crear-carta','Admin\DishController@storeMenu')->name('crear-carta');

//User