<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use PHPUnit\Framework\Test;

Route::name('product.')
    ->group(function () {
        Route::get('/', 'ProductController@index')->name('index');
        Route::get('/product/{id}', 'ProductController@show')->name('show');
    });

Route::prefix('/line_item')
    ->name('line_item.')
    ->group(function () {
        Route::post('/create', 'LineItemController@create')->name('create');
        Route::post('/delete', 'LineItemController@delete')->name('delete');
});

Route::prefix('/cart')
    ->name('cart.')
    ->middleware('sesstionget')
    ->group(function () {
        Route::get('', 'CartController@index')->name('index');
        Route::get('/checkout', 'CartController@checkout')->name('checkout');
        Route::get('/success', 'CartController@success')->name('success');            
});
// Test