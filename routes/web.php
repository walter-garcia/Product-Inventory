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

Route::get('/', 'ProductController@index');
Route::get('/products', 'ProductController@list');
Route::get('/products/new', 'ProductController@newProduct');
Route::get('/products/update/{product}', 'ProductController@edit');
Route::put('/products/{product}', 'ProductController@update');
Route::delete('/products/{product}', 'ProductController@delete');
Route::post('/products/register', 'ProductController@include');
Route::get('/products/details/{product}', 'ProductController@showDetails');
