<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile/information', [PortfolioProfileController::class, 'edit'])->name('profile.custom.edit');
    Route::put('/profile/information', [PortfolioProfileController::class, 'update'])->name('profile.custom.update');
});

Route::middleware(['auth'])->group(function () {

});

require __DIR__.'/auth.php';
