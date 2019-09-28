<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function () {

        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

            Route::get('/index', 'DashboardController@index')->name('index');

            Route::get('users/index', 'UserController@index')->name('users.index');
            Route::get('users/create', 'UserController@create')->name('users.create');;
            Route::post('users/store', 'UserController@store')->name('users.store');;
            Route::get('users/edit/{id}', 'UserController@edit')->name('users.edit');;
            Route::patch('users/update/{id}', 'UserController@update')->name('users.update');;
            Route::delete('users/destroy', 'UserController@destroy')->name('users.destroy');;

        });

    });

