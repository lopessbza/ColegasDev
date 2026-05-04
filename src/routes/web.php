<?php
 
 use Illuminate\Support\Facades\Route;

 // Rota para o Blog
 Route::get('/blog', function () {
     return view('site.blog.index');
 });
 
 // Rota para a página de Contato
 Route::get('/contato', function () {
     return view('site.contato.index');
 });

Route::get('/', function () {
    return view('site.home.index');
});

Route::get('/portifolio', function () {
    return view('site.portifolio.index');
});

Route::get('/preco', function () {
    return view('site.preco.index');
});

// Rota para a página de Serviços
Route::get('/servicos', function () {
    return view('site.servicos.index');
});

Route::get('/sobre', function () {
    return view('site.sobre.index');
});

Route::get('/testimonial', function () {
    return view('site.testimonial.index');
});



