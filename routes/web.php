<?php

use App\Http\Controllers\Forntend\ForntendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', [ForntendController::class, 'index'])->name('frontend.index');

Route::get('/shop', [ForntendController::class, 'shop'])->name('frontend.shop');

Route::get('/detail', [ForntendController::class, 'detail'])->name('frontend.detail');

Route::get('/cart', [ForntendController::class, 'cart'])->name('frontend.cart');

Route::get('/checkout', [ForntendController::class, 'checkout'])->name('frontend.checkout');

// Route::get('/test', [ForntendController::class, 'test'])->name('test');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
