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

Route::view('/','home');

Route::resource('post', 'PostsController');

Route::resource('membrii', 'MembriController');
Route::resource('stiri','StiriController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
