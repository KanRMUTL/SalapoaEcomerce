<?php

// Store Pages
Route::get('/', function () {
    return view('store/index');
});
Route::get('/cart', function () {
    return view('store/cart');
});

// API
Route::get('/getproducts', 'ProductController@getProduct');
