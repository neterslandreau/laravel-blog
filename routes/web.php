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

Route::get('/', 'ArticlesController@index')->name('home');
//Route::get('/articles' , 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{slug}', 'ArticlesController@show');
Route::post('/articles', 'ArticlesController@store');
Route::post('/articles/{slug}/comments', 'CommentsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index');
