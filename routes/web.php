<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('presentation', [App\Http\Controllers\Presentation::class, 'about']);
Route::resource('books', 'App\Http\Controllers\BookController');
Route::resource('contactos', 'App\Http\Controllers\ContactoController');
