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
// Route::get('/notifs', 'PagesController@notifs');

Route::get('/search', 'PagesController@search');

Route::resource('works', 'WorkController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
