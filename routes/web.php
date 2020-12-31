<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\BookController@index')->name('home');
Route::get('/books/{id}', 'App\Http\Controllers\BookController@show')->name('view');
Route::get('/create', 'App\Http\Controllers\BookController@create')->name('create');
Route::post('/create.do', 'App\Http\Controllers\BookController@store')->name('create.do');
Route::get('/edit/{id}', 'App\Http\Controllers\BookController@edit')->name('edit');
Route::post('/edit.do/{id}', 'App\Http\Controllers\BookController@update')->name('edit.do');
Route::get('/delete{id}', 'App\Http\Controllers\BookController@destroy')->name('delete');