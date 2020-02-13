<?php

// Store Pages
Route::get('/', function () {
    return view('store/index');
});
Route::get('/cart', function () {
    return view('store/cart');
});
Route::get('/checkout', function () {
    return view('store/checkout');
});

// API
Route::get('/getproducts', 'ProductController@getProduct');
Route::post('/createOrder', 'OrderController@createOrder');
Route::get('/sample', 'OrderController@createOrder');
