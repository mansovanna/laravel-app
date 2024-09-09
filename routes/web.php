<?php

use App\Http\Controllers\Auth\Authuntication;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\GuardControlApp;
use App\Http\Middleware\islogin;
use App\Http\Middleware\Nologin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Models\Menu;


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

    Route::get('/product', function () {
        return view('Clients.pages.products');
    })->name('products');

    Route::get('/product/create', function () {
        return view('Clients.pages.products.create');
    })->name('product_create');

    Route::get('/product/update', function () {
        return view('Clients.pages.products.update');
    })->name('product_update');

    Route::get('/profile', function () {
        return view('Clients.components.profile.postProfile');
    })->name('profile');

    Route::get('/slider', function () {
        return view('Clients.pages.slider');
    })->name('slider');

    Route::get('/setting', function () {
        return view('Clients.pages.setting');
    })->name('settings');

    Route::post('/profile/update', [Authuntication::class, 'changePrfile'])->name('profile.update');
    Route::put('/personal/{id}', [Authuntication::class, 'changePersonal'])->name('personal.update');

    Route::post('/logout', [Authuntication::class, 'logout'])->name('logout');
});

// -------------
Route::get('/eshop', function (){

    $menus = Menu::with(['children'])->where("parent_id", null)->get();
    return view('eshop.pages.home', compact('menus'));
});



// -------------
Route::get('/admins', [AdminController::class, "index"])->name("admin")->middleware(Nologin::class);
Route::get('/admins/menu', [MenuController::class, "index"])->name("adminmenu")->middleware(Nologin::class);
Route::get('/admins/addmenu', [MenuController::class, "addmenu"])->name("addmenu")->middleware(Nologin::class);
Route::post('/admins/addmenu', [MenuController::class, "createMenu"])->name("create-menu")->middleware(Nologin::class);
Route::delete('/admins/{id}/menu', [MenuController::class, 'destroy'])->name('menu.delete')->middleware(Nologin::class);


Route::get('/admins/logout', [AdminController::class, "logout"])->name("adminlogout")->middleware(Nologin::class);

Route::get('/admins/login', [AdminController::class, "login"])->name("adminlogin")->middleware(islogin::class);
Route::post('/admins/login',[AdminController::class, 'stafflogin'])->middleware(islogin::class);

Route::get('/admins/register', [AdminController::class, "register"])->middleware(islogin::class);
Route::post('/admins/register', [AdminController::class, "adminRegister"])->name("adminRegister")->middleware(islogin::class);

