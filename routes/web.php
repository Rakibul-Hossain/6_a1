<?php



Route::get('/','HomeController@home');
Route::get('/nig','HomeController@nig');
Route::get('/service','HomeController@service');
Route::get('/about','HomeController@about');
Route::post('/store','HomeController@store');
Route::get('/table','HomeController@table');
