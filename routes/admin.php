<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('admin::home');
    Route::get('/new/article', 'DashboardController@createArticle')->name('admin::newarticle');
    Route::post('/new/article', 'DashboardController@storeArticle');
});
