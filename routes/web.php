<?php

use App\Http\Controllers\Auth\Authuntication;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\GuardControlApp;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

// Routes accessible only by guests (not logged in)
Route::middleware('guest')->group(function () {
    Route::get('/login', [Authuntication::class, 'loginForm'])->name('login');
    Route::post('/login', [Authuntication::class, 'login']);

    Route::get('/register', [Authuntication::class, 'showFormRegister'])->name('register');
    Route::post('/register', [Authuntication::class, 'register']);
});

// Routes accessible only by authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('Clients.pages.dashboard');
    })->name('home');

    Route::get('/product', function (){
        return view('Clients.pages.products');
    })->name('products');
    Route::get('/product/create', function(){
        return view('Clients.pages.products.create');
    })->name('product_create');
    Route::get('/product/update', function(){
        return view('Clients.pages.products.update');
    })->name('product_update');


    Route::get('/profile', function () {
        return view('Clients.components.profile.postProfile');
    })->name('profile');
    Route::get('slider', function (){
        return view('Clients.pages.slider');
    })->name('slider');
    Route::get('setting', function (){
        return view('Clients.pages.setting');
    })->name('settings');

    Route::post('/profile/update', [Authuntication::class, 'changePrfile'])->name('profile.update');
    Route::put('/personal/{id}', [Authuntication::class, 'changePersonal'])->name('personal');

    Route::post('/logout', [Authuntication::class, 'logout'])->name('logout');
});

// -------------
Route::get('/eshop', function (){
    return view('eshop.pages.home');
});



// -------------
Route::get('/admins', [AdminController::class, "index"])->name("admin");
Route::get('/admins/menu', [MenuController::class, "index"])->name("admin");
Route::get('/admins/login', [AdminController::class, "login"])->name("adminlogin");
Route::post('/admins/login',[AdminController::class, 'stafflogin']);
Route::get('/admins/register', [AdminController::class, "register"]);
Route::post('/admins/register', [AdminController::class, "adminRegister"])->name("adminRegister");

// Route::group(['prefix' => 'admins'], function(){

// });
