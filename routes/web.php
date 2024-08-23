<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::view('about-us','about');
Route::view('gallery','gallery');
Route::view('all-round-cricket','services.all-round-cricket');
Route::view('one-to-one-cricket','services.one-to-one-cricket');
Route::view('weekend-cricket','services.weekend-cricket');
Route::view('contact-us','contact-us');



