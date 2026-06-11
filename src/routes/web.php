<?php

 use App\Http\Controllers\Site\HomeController;
 use App\Http\Controllers\Admin\AuthController;
 use Illuminate\Support\Facades\Route;


//  admin
 use App\Http\Controllers\Admin\DashController;

 Route::get('/contato', function () {
     return view('site.contato.index');
 });

Route::get('/', function () {
    return view('site.home.index');
});


Route::get('/servicos', function () {
    return view('site.servicos.index');
});

Route::get('/sobre', function () {
    return view('site.sobre.index');
});


