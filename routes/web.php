<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('presentation', [App\Http\Controllers\PresentationController::class, 'about']);
Route::resource('books', 'App\Http\Controllers\BookController');
Route::resource('contacts', 'App\Http\Controllers\ContactController');
