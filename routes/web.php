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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home','userController@index');
Route::get('/product/create','productController@create')->name('create.product');
Route::post('/product/create','productController@store')->name('store.product');
Route::get('/category/create','categoryController@create')->name('create.category');
Route::post('/category/store','categoryController@store')->name('store.category');
Route::get('/products','productController@index')->name('products');
Route::get('/categories','categoryController@index')->name('categories');
Route::get('/home','frontEndController@index');
