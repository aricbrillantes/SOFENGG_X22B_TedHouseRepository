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

Route::get('/', 'PagesController@index');
Route::get('/{user}/profile', 'PagesController@user');
Route::get('/search/{arr_search}', 'PagesController@search');
Route::get('/search/{arr_search}/{sort}', 'PagesController@sort');

Route::resource('works', 'WorksController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
