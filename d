[1mdiff --git a/routes/web.php b/routes/web.php[m
[1mindex 1edab3a..5d0314a 100644[m
[1m--- a/routes/web.php[m
[1m+++ b/routes/web.php[m
[36m@@ -62,30 +62,11 @@[m
 [m
 // -------------[m
 Route::get('/eshop', function (){[m
[31m-<<<<<<< HEAD[m
     return view('eshop.pages.home');[m
 }); [m
 [m
 // -------------[m
 Route::get('/admins/menu', [MenuController::class, "index"])->name("admin");[m
[31m-=======[m
[31m-[m
[31m-    $menus = Menu::with(['children'])->where("parent_id", null)->get();[m
[31m-    return view('eshop.pages.home', compact('menus'));[m
[31m-});[m
[31m-[m
[31m-[m
[31m-[m
[31m-// -------------[m
[31m-Route::get('/admins', [AdminController::class, "index"])->name("admin")->middleware(Nologin::class);[m
[31m-Route::get('/admins/menu', [MenuController::class, "index"])->name("adminmenu")->middleware(Nologin::class);[m
[31m-Route::get('/admins/addmenu', [MenuController::class, "addmenu"])->name("addmenu")->middleware(Nologin::class);[m
[31m-Route::post('/admins/addmenu', [MenuController::class, "createMenu"])->name("create-menu")->middleware(Nologin::class);[m
[31m-Route::delete('/admins/{id}/menu', [MenuController::class, 'destroy'])->name('menu.delete')->middleware(Nologin::class);[m
[31m-[m
[31m-[m
[31m-Route::get('/admins/logout', [AdminController::class, "logout"])->name("adminlogout")->middleware(Nologin::class);[m
[31m->>>>>>> 03a2cca5d9e38ffd691349465a696bec2487d57e[m
 [m
 Route::get('/admins/login', [AdminController::class, "login"])->name("adminLogin");[m
 Route::post('/admins/login',[AdminController::class, 'stafflogin']);[m
