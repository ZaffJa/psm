<?php
Route::get('/','DashboardController@view');
Route::get('login','AuthController@login');


Route::group(['namespace' => 'Web'], function () {
    Route::get('car', 'CarController@view')->name('car');
    Route::post('car', 'CarController@store')->name('car.store');
    Route::get('car/{car}/edit', 'CarController@edit')->name('car.edit');
    Route::post('car/{car}/edit', 'CarController@update')->name('car.update');
    Route::get('car/{car}/delete', 'CarController@delete')->name('car.delete');

    Route::get('location', 'LocationController@view')->name('location');
    Route::post('location', 'LocationController@store')->name('location.store');
    Route::get('location/{location}/edit', 'LocationController@edit')->name('location.edit');
    Route::post('location/{location}/edit', 'LocationController@update')->name('location.update');
    Route::get('location/{location}/delete', 'LocationController@delete')->name('location.delete');
    Route::get('setting', 'SettingController@view')->name('setting');

});
