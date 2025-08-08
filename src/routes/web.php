<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Redireciona a rota inicial para a tela de login
Route::get('/', function () {
    return redirect()->route('login');
});

// Rotas de autenticação
Auth::routes();





Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('cetgorias', App\Http\Controllers\CategoryController::class);
    Route::resource('produtos', App\Http\Controllers\ProductController::class);
});
