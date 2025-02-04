<?php

use App\Livewire\Dashboard;
use App\Http\Controllers\BannerDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class);
Route::get('/banner', [BannerDashboardController::class, 'index']);
Route::post('/banner', [BannerDashboardController::class, 'store'])->name('banner.store');
