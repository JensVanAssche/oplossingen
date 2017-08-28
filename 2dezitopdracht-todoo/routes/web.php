<?php

Route::get('/', 'TodoController@home');
Route::get('/dashboard', 'TodoController@dashboard')->middleware('auth');
Route::get('/todo', 'TodoController@todo')->middleware('auth');
Route::get('/todo/add', 'TodoController@create')->middleware('auth');

Route::get('/todo/edit_{id}', 'TodoController@update')->middleware('auth');
Route::get('/todo/delete_{id}', 'TodoController@delete')->middleware('auth');

Route::post('/todo', 'TodoController@store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');