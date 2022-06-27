<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index')->name('home');

Route::get('/about', 'PageController@about')->name('chi-siamo');

Route::get('/contacts', 'PageController@contacts')->name('contatti');

Route::get('/', 'MovieController@index')->name('movies');
