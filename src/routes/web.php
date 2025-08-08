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




// Rotas protegidas que requerem autenticação
Route::middleware(['auth'])->group(function () {
    // Rota do dashboard
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // Rotas de recursos
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::resource('products', App\Http\Controllers\ProductController::class);
});
