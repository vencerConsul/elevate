<?php

use Illuminate\Support\Facades\Route;

if (App::environment('production')) {
    URL::forceScheme('https');
}

Auth::routes();

Route::get('/', 'LandingController@index')->name('landing');
Route::get('/home', 'HomeController@index')->name('home');
