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

Auth::routes();

Route::get('/', 'ClassifiedsController@index');

Route::get('/home', 'HomeController@index');

Route::get('/welcome', 'HomeController@index');

Route::resource('/classifieds', 'ClassifiedsController');

Route::resource('/categories', 'CategoriesController');

Route::get('/search', 'ClassifiedsController@search');

