<?php

Route::get('/', function () {
    return redirect()->route('dashboard.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
