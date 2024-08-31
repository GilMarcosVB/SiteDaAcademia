<?php

use App\Http\Controllers\PlanoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/',[SiteController::class,"index"]);
Route::get('/sobre-nos',[SiteController::class,"sobreNos"]);
Route::get('/login',[SiteController::class,"login"]);
Route::get('/cadastro',[SiteController::class,"cadastro"]);

Route::get('/plano',[SiteController::class,"plano"])->name("semanal");




Route::get('/admin/plano', [PlanoController::class, "index"])->name("plano.index");
Route::get('/admin/plano/cadastrar', [PlanoController::class, "create"])->name("plano.create");
Route::get('/admin/plano/editar/{id}', [PlanoController::class, "edit"])->name("plano.edit");
Route::get('/admin/plano/visualizar/{id}', [PlanoController::class, "show"])->name("plano.show");
Route::post('/admin/plano/cadastrar/salvar', [PlanoController::class, "store"])->name("plano.store");
Route::put('/admin/plano/atualizar/{id}', [PlanoController::class, "update"])->name("plano.update");
Route::delete('/admin/plano/deletar/{id}', [PlanoController::class, "destroy"])->name("plano.destroy");



Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/logout', function () {
    // Lógica de logout aqui
    return redirect()->route('home');
})->name('logout');



