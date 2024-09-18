<?php

use App\Http\Controllers\Eshop\CartController;
use App\Http\Controllers\EshopController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::prefix('eshop')->group(function () {
    Route::get('/', [EshopController::class, 'index'])->name('eshop.home');


    Route::get('/cart-view', [CartController::class, 'index'])->name('cart.view');

    // route add to card of eshop
    Route::get('/dd-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
    // End route add to card of eshop
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

    Route::delete('/remove-to-cart/{id}', [CartController::class, 'remove'])->name('cart.remove');

    //

    // Block Wish List
    Route::get('/wish', [CartController::class, 'wishShow'])->name('wish.show');
    // routes/web.php
    Route::get('/search-products', [ProductController::class, 'search'])->name('products.search');

});


