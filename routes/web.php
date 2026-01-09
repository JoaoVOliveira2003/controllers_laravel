<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Middleware\EndMiddleware;
use App\Http\Middleware\StartMiddleware;

Route::get('/ola',[MainController::class,'ola']);
Route::get(  '/single', SingleActionController::class);
Route::get('/adminInterno',[adminController::class,'index']);

//Cria a rota para quase todas as coisas do resousce de uma vez só
// Route::resource('users',UserController::class);
Route::resources([
    'users'=>UserController::class,
    'produtos'=>ProductsController::class,
]);

/*
 Route::get('/index',[MainController::class,'index'])->name('index')->middleware(StartMiddleware::class);
 Route::get('/about',[MainController::class,'about'])->name('about')->middleware(EndMiddleware::class);
 Route::get('/contact',[MainController::class,'contact'])->name('contact',)->middleware(StartMiddleware::class,EndMiddleware::class);
*/

// Route::middleware([StartMiddleware::class,EndMiddleware::class])->group(function(){
//     Route::get('/',[MainController::class,'index'])->name('index');
//     //aqui só vai rodar 1 e não os dois.
//     Route::get('/about',[MainController::class,'about'])->name('about')->withoutMiddleware([EndMiddleware::class]);
//     Route::get('/contact',[MainController::class,'contact'])->name('contact');
// });

Route::middleware (['correr_antes'])->group(function(){
     Route::get('/',[MainController::class,'index'])->name('index');
     Route::get('/contact',[MainController::class,'contact'])->name('contact');
});
