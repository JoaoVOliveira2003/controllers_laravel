<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;



Route::get('/ola',[MainController::class,'ola']);

Route::get( '/single', SingleActionController::class);


Route::get('/adminInterno',[adminController::class,'index']);

//Cria a rota para quase todas as coisas do resousce de uma vez só
// Route::resource('users',UserController::class);


Route::resources([
    'users'=>UserController::class,
    'produtos'=>ProductsController::class,
]);

