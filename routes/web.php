<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('app');
});

Route::get('/products', function () {
    return view('products.index');
})->name('products.index');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');