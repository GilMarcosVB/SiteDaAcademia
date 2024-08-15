<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/',[SiteController::class,"index"]);
Route::get('/sobre-nos',[SiteController::class,"sobreNos"]);
Route::get('/login',[SiteController::class,"login"]);
Route::get('/cadastro',[SiteController::class,"cadastro"]);

Route::get('/plano',[SiteController::class,"plano"])->name("semanal");



