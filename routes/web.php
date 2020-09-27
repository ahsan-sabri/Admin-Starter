<?php


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/admin', 'DashboardController@index')->name('admin');
Route::get('invoice', function(){
    return view('invoice');
});

Route::get('{path}','DashboardController@index')->where('path', '([A-z]+)?');
