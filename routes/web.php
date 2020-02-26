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

Route::get('/', 'BaseController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('home', 'HomeController@postIndex');

Route::get('/summaries', 'SummaryController@getIndex');

Route::get('/summary/{id}', 'SummaryController@getOne');

Route::get('/summary/edit/{id}', 'SummaryController@getEdit');

Route::post('/home/{id}', 'HomeController@postEdit');

Route::get('summary/delete/{id}', 'HomeController@postDelete');

Route::get('{url}', 'PageController@getIndex');
