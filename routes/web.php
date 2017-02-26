<?php
Route::get('/', function () {
    return view('dashboard');
});

Route::get('login', function () {
    return view('login');
});

Route::get('setting','SettingController@view')->name('setting');