<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| ROTAS PÚBLICAS – SITE
|--------------------------------------------------------------------------
*/
Route::view('/', 'home')->name('home');
Route::view('/sobre', 'about')->name('about');
Route::view('/servicos', 'services')->name('services');
Route::view('/galeria', 'gallery')->name('gallery');
Route::view('/contato', 'contact')->name('contact');
Route::view('/calculadora', 'calculator')->name('calculator');

Route::post('/contato', [ContactController::class, 'send'])->name('contact.send');


/*
|--------------------------------------------------------------------------
| ADMIN (SEM LOGIN – ACESSO DIRETO)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/mensagens', [ContactController::class, 'admin'])->name('admin.messages');
