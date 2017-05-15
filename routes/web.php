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
    return view('landing');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/roomlist/{room_name}','RoomController@room');
Route::get('/roomlist/{room_name}/{category}','RoomController@category');
Route::get('/product/{id}','ProductController@product');
Route::get('/add/{id_cart}/{id_product}','ProductController@addtocart');
Route::post('/addtocart','ProductController@addtocart');
