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

// Artisan command
Route::get('/config-clear', function () {
    $status = Artisan::call('config:clear');
    return '<h1>Configurations cleared</h1>';
});

Route::get('/storage-link', function () {
    $status = Artisan::call('storage:link');
    return '<h1>run php storage:link success</h1>';
});


