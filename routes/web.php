<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BateauController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("accueil");

Route::resource("bateaux", BateauController::class)->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
