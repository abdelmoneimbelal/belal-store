<?php

use App\Http\Controllers\Forntend\ForntendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', [ForntendController::class, 'index'])->name('index');

Route::get('/shop', [ForntendController::class, 'shop'])->name('shop');

Route::get('/detail', [ForntendController::class, 'detail'])->name('detail');

Route::get('/cart', [ForntendController::class, 'cart'])->name('cart');

Route::get('/checkout', [ForntendController::class, 'checkout'])->name('checkout');

// Route::get('/test', [ForntendController::class, 'test'])->name('test');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
