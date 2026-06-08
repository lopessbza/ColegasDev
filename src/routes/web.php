<?php
 
 use App\Http\Controllers\ContatoController;
 use Illuminate\Support\Facades\Route;

 Route::get('/blog', function () {
     return view('site.blog.index');
 });
 
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

Route::get('/servicos', function () {
    return view('site.servicos.index');
});

Route::get('/sobre', function () {
    return view('site.sobre.index');
});

Route::get('/testimonial', function () {
    return view('site.testimonial.index');
});

Route::post('/contato/enviar', [ContatoController::class, 'enviar'])->name('contato.enviar');



