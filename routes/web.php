<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'twitterController@index');
Route::post('/', 'twitterController@store');
Route::get('/tweets/{id}/delete', 'twitterController@destroy');

Route::get('/tweets/{id}', 'twitterController@view');