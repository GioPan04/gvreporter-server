<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::prefix('/articles/{id}')->group(function () {
    Route::get('/', 'ArticlesController@show')->name('articles::show');
});

Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@make');
Route::get('/logout', 'AuthController@logout')->name('admin::logout');
