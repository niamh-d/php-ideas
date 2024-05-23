<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::post('/idea', [IdeaController::class, 'store'])->name('idea.create');

Route::get('/terms', function () {
    return view('terms');
});