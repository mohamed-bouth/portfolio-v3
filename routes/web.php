<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:5,60')->name('contact.store');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile/information', [PortfolioProfileController::class, 'edit'])->name('profile.custom.edit');
    Route::put('/profile/information', [PortfolioProfileController::class, 'update'])->name('profile.custom.update');

    Route::resource('/projects', ProjectController::class)->names('projects');
    Route::resource('/education', EducationController::class)->except(['show']);

    Route::get('/messages', [ContactMessageController::class, 'index'])->name('messages.index');
    Route::delete('/messages/{contact}', [ContactMessageController::class, 'destroy'])->name('messages.destroy');
    Route::delete('/messages', [ContactMessageController::class, 'destroyAll'])->name('messages.destroyAll');
});
require __DIR__.'/auth.php';
