<?php

use App\Http\Controllers\Auth\Authuntication;
use App\Http\Controllers\CurrencyController;
use App\Http\Middleware\Nologin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MenuController;
use App\Models\language;
use App\Models\Menu;
use App\Http\Controllers\languageController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ChildrenImageProductController;
use App\Models\Product;
use App\Models\Currency;

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
    $languages = language::get();

    $products = Product::with('category')->get();
    $orderDir = "asc";

    if(request()->get('orderDir')){
        $orderDir = request()->get('orderDir');
    }
    //return $orderDir;
    $products = Product::with('category')->orderBy('price', $orderDir)->get();
    $currencies = Currency::get();

    return view('eshop.pages.home', compact('menus', 'products', 'languages', 'currencies'));
});




// Block Product
Route::prefix('admins')->group(function () {

    // ------------- Blolck Dashboard Admin LTE
    Route::get('/', [AdminController::class, "index"])->name("admin");
    Route::get('/menu', [MenuController::class, "index"])->name("adminmenu");
    Route::get('/addmenu', [MenuController::class, "addmenu"])->name("addmenu");
    Route::post('/addmenu', [MenuController::class, "createMenu"])->name("create-menu");
    Route::delete('/{id}/menu', [MenuController::class, 'destroy'])->name('menu.delete');
    Route::get('/menu/{id}/update', [MenuController::class, 'edit'])->name('menu.edit');
    Route::put('/menu/{id}/update', [MenuController::class, 'update'])->name('menu.update');
    Route::get('/admins/logout', [AdminController::class, "logout"])->name("adminlogout");


    // Block of Product for App

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');

    Route::get('/product/{id}/update', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}/delete', [ProductController::class, 'destroy'])->name('product.destroy');
    // -------- Children Image of Product
    Route::get('/child', [ChildrenImageProductController::class, 'index'])->name('child.product.index');
    Route::get('/child/create', [ChildrenImageProductController::class, 'create'])->name('child.product.create');
    Route::post('/child/create', [ChildrenImageProductController::class, 'store'])->name('child.product.store');
    Route::get('/child/{id}/update', [ChildrenImageProductController::class, 'edit'])->name('child.product.edit');
    Route::put('/child/{id}/update', [ChildrenImageProductController::class, 'update'])->name('child.product.update');
    Route::delete('/child/{id}/delete', [ChildrenImageProductController::class, 'destroy'])->name('child.product.destroy');
    // ----------------------------
    // End Block of Product for App

    // --------------------------------------
    // Block Category
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/update', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
    // End Block Category
    
    //Block Brand 
    Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brand/create', [BrandController::class, 'show'])->name('brand.show');
    Route::post('/brand/create', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/{id}/update', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/brand/{id}/update', [BrandController::class, 'update'])->name('brand.update');
    Route::delete('/brand/{id}/destroy', [BrandController::class, 'destroy'])->name('brand.destroy');
    //End Block Brand

    // Currency of App

    Route::get('/currency', [CurrencyController::class, 'index'])->name('currency.index');
    Route::get('/currency/create', [CurrencyController::class, 'show'])->name('currency.create');
    Route::post('/currency/create', [CurrencyController::class, 'store'])->name('currency.store');
    Route::get('/currency/{id}/edit', [CurrencyController::class, 'edit'])->name('currency.edit');
    Route::put('/currency/{id}', [CurrencyController::class, 'update'])->name('currency.update');
    Route::delete('/currency/{id}', [CurrencyController::class, 'destroy'])->name('currency.destroy');
    // End Block Currency

    // Language of App
    Route::get('/language', [languageController::class, 'index'])->name('language.index');
    Route::get('/language/create', [languageController::class, 'show'])->name('language.show');
    Route::post('/language/create', [languageController::class, 'store'])->name('language.store');
    Route::get('/language/{id}/update', [languageController::class, 'edit'])->name('language.edit');
    Route::put('/language/{id}/update', [languageController::class, 'update'])->name('language.update');
    Route::delete('language/{id}', [languageController::class, 'destroy'])->name('language.destroy');
})->middleware(Nologin::class);


// Block Admin Authutencation of App Admin
Route::get('/admins/login', [AdminController::class, "login"])->name("adminLogin");
Route::post('/admins/login', [AdminController::class, 'index'])->name('admin.login');

Route::get('/admins/register', [AdminController::class, "register"]);
Route::post('/admins/register', [AdminController::class, "adminRegister"])->name("adminRegister");
