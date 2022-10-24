<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', fn () => view('home'))->name('home');

Route::get('cancellation-policy', fn () => view('cancellation-policy'))
    ->name('cancellation-policy');

Route::get('privacy-policy', fn () => view('privacy-policy'))->name('privacy-policy');

Route::get('terms-and-conditions', fn () => view('terms-and-conditions'))->name('terms-and-conditions');

Route::get('products', fn () => view('products'))->name('products');

Route::get('product-detail', fn () => view('product-detail'))->name('product-detail');
// Route::get('product-detail/{slug}', fn () => view('product-detail/{slug}'))->name('product-detail');
