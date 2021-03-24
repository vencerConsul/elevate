<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'LandingController@index')->name('landing');
Route::get('/home', 'HomeController@index')->name('home');
