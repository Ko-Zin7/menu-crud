<?php

Route::get('/','HomeController@index');

Route::get('tasks','TaskController@index');

Route::post('tasks','TaskController@store');

Route::get('tasks/{task}','TaskController@show');

Route::get('tasks/{task}/edit','TaskController@edit');
Route::put('tasks/{task}/edit','TaskController@update');
Route::delete('tasks/{task}/delete','TaskController@delete');

Route::get('subjects/{subject}','SubjectController@show');
