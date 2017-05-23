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
Route::get('/admin', function(){
  return view('admin');
});
Route::get('/admcategory', function(){
  return view('adm_category');
});
Route::get('/admproduct', function(){
  return view('adm_product');
});
Route::get('/admprofile', function(){
  return view('adm_profile');
});
Route::get('/admlanding', function(){
  return view('adm_landing');
});
Route::get('/admarticle', function(){
  return view('adm_article');
});
Route::get('/admdocumentation', function(){
  return view('adm_documentation');
});
Route::get('/admcontact', function(){
  return view('adm_contact');
});
Route::get('/roomlist/{room_name}','RoomController@room');
Route::get('/roomlist/{room_name}/{category}','RoomController@category');
Route::get('/product/{id}','ProductController@product');
Route::get('/add/{id_cart}/{id_product}','ProductController@addtocart');
Route::post('/addtocart','ProductController@addtocart');
