<?php

use App\Http\Controllers\PlanoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/',[SiteController::class,"index"]);
Route::get('/sobre-nos',[SiteController::class,"sobreNos"]);
Route::get('/login',[SiteController::class,"login"]);
// Route::get('/cadastro',[SiteController::class,"cadastro.store"]);

Route::get('/plano',[SiteController::class,"plano"])->name("semanal");


Route::get('/cadastro', [SiteController::class, "cadastro"])->name("site.create");


Route::get('/admin/plano', [PlanoController::class, "index"])->name("plano.index");
Route::get('/admin/plano/cadastrar', [PlanoController::class, "create"])->name("plano.create");
Route::get('/admin/plano/editar/{id}', [PlanoController::class, "edit"])->name("plano.edit");
Route::get('/admin/plano/visualizar/{id}', [PlanoController::class, "show"])->name("plano.show");
Route::post('/admin/plano/cadastrar/salvar', [PlanoController::class, "store"])->name("plano.store");
Route::put('/admin/plano/atualizar/{id}', [PlanoController::class, "update"])->name("plano.update");
Route::delete('/admin/plano/deletar/{id}', [PlanoController::class, "destroy"])->name("plano.destroy");


Route::get('/admin/usuario', [UsuarioController::class, "index"])->name("usuario.index");
Route::get('/admin/usuario/cadastrar', [UsuarioController::class, "create"])->name("usuario.create");
Route::get('/admin/usuario/editar/{id}', [UsuarioController::class, "edit"])->name("usuario.edit");
Route::get('/admin/usuario/visualizar/{id}', [UsuarioController::class, "show"])->name("usuario.show");

Route::post('/admin/usuario/cadastrar/salvar', [UsuarioController::class, "store"])->name("usuario.store");

Route::put('/admin/usuario/atualizar/{id}', [UsuarioController::class, "update"])->name("usuario.update");
Route::delete('/admin/usuario/deletar/{id}', [UsuarioController::class, "destroy"])->name("usuario.destroy");



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



