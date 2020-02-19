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
Route::get('/que', function () {
    return view('store/que');
});
Route::get('/shop', function () {
    return view('store/shop');
});

// Backend Pages
Route::get('/login', function () {
    return view('backend/login');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/{any}/{sub}', function () {
        return view('backend/index');
    })->where('any', 'admin')->where('sub', '.*');
    Route::get('/admin', function () {
        return view('backend/index');
    });
});

// API
Route::get('/getproducts', 'ProductController@getProduct');
Route::post('/createOrder', 'OrderController@createOrder');
Route::get('/getorder/{orderId}', 'OrderController@getOrder');
Route::get('/sample', 'OrderController@sample');
Route::get('/ordertoday', 'OrderController@getOrdersToday');
Route::put('/updatestatusorder/{order_id}', 'OrderController@updateStatus');

// Artisan command
Route::get('/config-clear', function () {
    $status = Artisan::call('config:clear');
    return '<h1>Configurations cleared</h1>';
});

Route::get('/storage-link', function () {
    $status = Artisan::call('storage:link');
    return '<h1>run php storage:link success</h1>';
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
