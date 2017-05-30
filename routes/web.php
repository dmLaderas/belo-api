<?php

Route::resource('patients', 'PatientController');

Route::get('sample', function() {
    return view('sample');
});

Route::get('login', ['uses' => 'AuthController@index', 'as' => 'login' ]);
Route::post('login', 'AuthController@login');

Route::group(['middleware' => 'auth'], function() {
    Route::get('logout', 'AuthController@logout');
    Route::get('/', function() {
        dd('Wow');
    });
});
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
