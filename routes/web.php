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

Route::get('/', function () {
    $header = config('header');
    $footer = config('footer');
    return view('home', compact('header', 'footer'));
})->name('home');

Route::get('/donna', function () {
    $header = config('header');
    $footer = config('footer');
    return view('woman', compact('header', 'footer'));
})->name('woman');

Route::get('/uomo', function () {
    $header = config('header');
    $footer = config('footer');
    return view('man', compact('header', 'footer'));
})->name('man');

Route::get('/bambino', function () {
    $header = config('header');
    $footer = config('footer');
    return view('children', compact('header', 'footer'));
})->name('children');

Route::get('/profilo', function () {
    $header = config('header');
    $footer = config('footer');
    return view('profile', compact('header', 'footer'));
})->name('profile');

Route::get('/preferiti', function () {
    $header = config('header');
    $footer = config('footer');
    return view('favorites', compact('header', 'footer'));
})->name('favorites');

Route::get('/carrello', function () {
    $header = config('header');
    $footer = config('footer');
    return view('cart', compact('header', 'footer'));
})->name('cart');

Route::get('/prodotti', function () {
    $header = config('header');
    $footer = config('footer');
    $products = config('products');
    $products_obj = [];
    foreach($products as $product){
        $products_obj [] = (object) $product;
    }
    return view('products', compact('products_obj', 'header', 'footer'));
})->name('products');
