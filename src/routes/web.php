<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Site\ClienteController;

// admin
use App\Http\Controllers\Admin\DashController;

 Route::get('/contato', function () {
     return view('site.contato.index'); 
 });

 Route::post('/contato', [App\Http\Controllers\Site\ContatoController::class, 'enviar'])->name('contato.enviar');

Route::get('/', function () {
    return view('site.home.index');
});


Route::get('/sobre', function () {
    return view('site.sobre.index');
});

// Rota para a página de serviços (seu arquivo servicos.blade.php)
Route::get('/servicos', [\App\Http\Controllers\Site\SiteController::class, 'servicos'])->name('site.servicos');

// Rota para a página de planos
Route::get('/planos', [\App\Http\Controllers\Site\SiteController::class, 'planos'])->name('site.planos');

// Rota do painel para ver os clientes e suas assinaturas
Route::get('/admin/clientes', [ClienteController::class, 'index'])->name('admin.clientes');


// Rota para ver a página de login
Route::get('/login', [AuthController::class, 'mostrarLogin'])->name('login');

// Rota que recebe os dados do formulário (POST) ao clicar no botão "Entrar"
Route::post('/login', [AuthController::class, 'logar'])->name('login.post');

// Rota para deslogar
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//DASH
Route::get('/admin', [DashController::class, 'index'])->name('dash');