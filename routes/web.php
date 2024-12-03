<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\DashboardController;

Route::any('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

Route::get('/', function () {
    return view('call');
});

Route::resource('call',Callcontroller::class)->middleware(['auth', 'verified']);;
Route::resource('certificate',CertificateController::class)->middleware(['auth', 'verified']);;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
