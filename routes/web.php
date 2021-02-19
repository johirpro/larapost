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

Route::get('/', 'HomeController@index');
Route::get('article/create', 'ArticlesController@create');
Route::post('/article/store', 'ArticlesController@store');
Route::get('article/{article}', 'ArticlesController@details');
Route::get('article/{article}/edit', 'ArticlesController@edit');
Route::put('article/{article}', 'ArticlesController@update');
//Route::get('article/{article}/delete', 'ArticlesController@delete');
