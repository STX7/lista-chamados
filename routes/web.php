<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CallController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('call', CallController::class);
Route::any('/show/{id}', [CallController::class, 'profile'])->name('call.show');
Route::any('final', [CallController::class, 'final'])->name('call.final');
Route::any('search', [CallController::class, 'search'])->name('call.search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
