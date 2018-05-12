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


Route::get('/','FrontController@index')->name('home');
Route::get('product','FrontController@product')->name('product');
Route::get('product_detail','FrontController@product_detail')->name('product_detail');


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('#');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

 Route::get('/',function(){

   return view('admin.index');
 })->name('admin.index');
 Route::resource('product', 'ProductsController');
Route::resource('category', 'CategoriesController');

});