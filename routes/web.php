<?php

use App\Http\Controllers\Auth\Authuntication;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\GuardControlApp;
use App\Http\Middleware\islogin;
use App\Http\Middleware\Nologin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Models\Menu;
use App\Models\Product;

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
Route::get('/eshop', function () {
    $menus = Menu::with(['children'])->where("parent_id", null)->get();
    $products =  Product::with('category')->get();

    return view('eshop.pages.home', compact('menus', 'products'));
});



// Route::get('/eshop', function () {
//     $currencys = Currency::get();
//     return view('eshop.pages.home', compact('currencys'));
// });



// -------------
Route::get('/admins', [AdminController::class, "index"])->name("admin")->middleware(Nologin::class);
Route::get('/admins/menu', [MenuController::class, "index"])->name("adminmenu")->middleware(Nologin::class);
Route::get('/admins/addmenu', [MenuController::class, "addmenu"])->name("addmenu")->middleware(Nologin::class);
Route::post('/admins/addmenu', [MenuController::class, "createMenu"])->name("create-menu")->middleware(Nologin::class);
Route::delete('/admins/{id}/menu', [MenuController::class, 'destroy'])->name('menu.delete')->middleware(Nologin::class);
Route::get('/admins/menu/{id}/update', [MenuController::class, 'edit'])->name('menu.edit')->middleware(Nologin::class);
Route::put('/admins/menu/{id}/update', [MenuController::class, 'update'])->name('menu.update')->middleware(Nologin::class);


// Block Product
Route::prefix('admins')->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');

    Route::get('/product/{id}/update', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}/delete', [ProductController::class, 'destroy'])->name('product.destroy');


    // Block Category
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/update', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
});



Route::prefix('admins')->group(function () {
    Route::get('/currency', [CurrencyController::class, 'index'])->name('currency.index');
    Route::get('/currency/create', [CurrencyController::class, 'show'])->name('currency.create');
    Route::post('/currency/create', [CurrencyController::class, 'store'])->name('currency.store');
    Route::get('/currency/{id}/edit', [CurrencyController::class, 'edit'])->name('currency.edit');
    Route::put('/currency/{id}', [CurrencyController::class, 'update'])->name('currency.update');
    Route::delete('/currency/{id}', [CurrencyController::class, 'destroy'])->name('currency.destroy');
});



Route::get('/admins/logout', [AdminController::class, "logout"])->name("adminlogout")->middleware(Nologin::class);
Route::get('/admins/login', [AdminController::class, "login"])->name("adminLogin");
Route::post('/admins/login', [AdminController::class, 'stafflogin']);

Route::get('/admins/register', [AdminController::class, "register"]);
Route::post('/admins/register', [AdminController::class, "adminRegister"])->name("adminRegister");
