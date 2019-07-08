<?php
use Illuminate\Support\Facades\Route;

//Rutas al controlador HomeController!!!
Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::resource('/posts', 'PostController')
->only(['index','show','create', 'store']);


