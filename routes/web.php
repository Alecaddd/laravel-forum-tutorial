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

Route::get('/', 'FrontEndController@page')->name('home');
Route::get('/about', 'FrontEndController@page')->name('about');
Route::get('/contact', 'FrontEndController@page')->name('contact');
Route::get('/blog', 'FrontEndController@page')->name('blog');
