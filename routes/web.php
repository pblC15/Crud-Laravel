<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'App\Http\Controllers\BookController@index')->name('home');
Route::get('/books/{id}', 'App\Http\Controllers\BookController@show')->name('view');
Route::get('/create', 'App\Http\Controllers\BookController@create')->name('create');
Route::post('/create.do', 'App\Http\Controllers\BookController@store')->name('create.do');
Route::get('/edit/{id}', 'App\Http\Controllers\BookController@edit')->name('edit');
Route::post('/edit.do/{id}', 'App\Http\Controllers\BookController@update')->name('edit.do');
Route::get('/delete{id}', 'App\Http\Controllers\BookController@destroy')->name('delete');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/logout', 'App\Http\Controllers\Auth\LogOutController@logout')->name('logout');

//Author
Route::get('/createAuthor', 'App\Http\Controllers\AuthorController@index')->name('create.author');
Route::post('/createAuthor.do', 'App\Http\Controllers\AuthorController@store')->name('createauthor.do');
