<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\FavoritosController;
use App\Providers\AuthenticatedSessionController;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/', [CharacterController::class, 'index'])->name('home.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Página Sobre
Route::get('/information', [SobreController::class, 'index'])->name('sobre'); 

// Página Ver Mais
Route::get('/chars/{id}', [CharacterController::class, 'characters']);// Rota para exibir os personagens na tela 
Route::post('/char/{id}', [CharacterController::class, 'saveCharacter'])->name('saveCharacter');// Tratativa para favoritar personagem

Route::get('/favorites', [FavoritosController::class, 'index'])->name('favorites.index');

require __DIR__.'/auth.php';
