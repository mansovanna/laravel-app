<?php

use App\Http\Controllers\Auth\Authuntication;

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\languagecontroller;
use App\Models\Menu;
use App\Models\language;
=======
>>>>>>> main


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
    // Route::get('/home', function () {
    //     return view('Clients.pages.dashboard');
    // })->name('home');

    // Route::get('/product', function () {
    //     return view('Clients.pages.products');
    // })->name('products');

    // Route::get('/product/create', function () {
    //     return view('Clients.pages.products.create');
    // })->name('product_create');

    // Route::get('/product/update', function () {
    //     return view('Clients.pages.products.update');
    // })->name('product_update');

    // Route::get('/profile', function () {
    //     return view('Clients.components.profile.postProfile');
    // })->name('profile');

    // Route::get('/slider', function () {
    //     return view('Clients.pages.slider');
    // })->name('slider');

    Route::get('/setting', function () {
        return view('Clients.pages.setting');
    })->name('settings');

    Route::post('/profile/update', [Authuntication::class, 'changePrfile'])->name('profile.update');
    Route::put('/personal/{id}', [Authuntication::class, 'changePersonal'])->name('personal.update');

<<<<<<< HEAD
        Route::post('/logout', [Authuntication::class, 'logout'])->name('logout');
});

// -------------

Route::get('/eshop', function () {
    $languages = language::all();

    $menus = Menu::with(['children'])->where("parent_id", null)->get();

    // Pass the data to the view
    return view('eshop.pages.home', compact('menus', 'languages'));
});




// -------------
Route::get('/admins', [AdminController::class, "index"])->name("admin")->middleware(Nologin::class);
Route::get('/admins/menu', [MenuController::class, "index"])->name("adminmenu")->middleware(Nologin::class);
Route::get('/admins/addmenu', [MenuController::class, "addmenu"])->name("addmenu")->middleware(Nologin::class);
Route::post('/admins/addmenu', [MenuController::class, "createMenu"])->name("create-menu")->middleware(Nologin::class);
Route::delete('/admins/{id}/menu', [MenuController::class, 'destroy'])->name('menu.delete')->middleware(Nologin::class);
Route::get('/admins/menu/{id}/update', [MenuController::class, 'edit'])->name('menu.edit')->middleware(Nologin::class);
Route::put('/admins/menu/{id}/update', [MenuController::class, 'update'])->name('menu.update')->middleware(Nologin::class);


Route::get('/admins/language',[languagecontroller::class,'showlanguagePage'])->name("adminlanguage")->middleware(Nologin::class);
Route::get('/admins/addlanguage',[languagecontroller::class,'showaddlanguage'])->middleware(Nologin::class);
Route::post('/admins/addlanguage',[languagecontroller::class,'createlanguage'])->middleware(Nologin::class);
Route::get('/admins/editlanguage/{id}',[languagecontroller::class,'showeditlanguage'])->name("language.edit")->middleware(Nologin::class);
Route::put('/admins/editlanguage/{id}',[languagecontroller::class,'editlanguage'])->name("language.update")->middleware(Nologin::class);
Route::delete('/admins/deletelanguage/{id}',[languagecontroller::class,'deletelanguage'])->middleware(Nologin::class);
=======
    Route::post('/logout', [Authuntication::class, 'logout'])->name('logout');
});


// Import from Eshop route
// Eshop
require base_path('routes/eshop.php');
// End Eshop



// Block Admin Controller all Items

// Block Product
require base_path('routes/admin.php');
// End Block Admin Controller all Items
>>>>>>> main


