<?php
use Illuminate\Support\Facades\Route;

//Rutas al controlador HomeController!!!
Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blog-post2/{id}/{welcome?}','HomeController@blogPost')->name('blog-post');


