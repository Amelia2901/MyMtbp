<?php

use App\Livewire\Dashboard;
use App\Http\Controllers\BannerDashboardController;
use App\Http\Controllers\PrayerSchedulesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMosquesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class);
Route::get('/banner', [BannerDashboardController::class, 'index']);
Route::post('/banner', [BannerDashboardController::class, 'store'])->name('banner.store');

Route::get('/shalat', [PrayerSchedulesController::class, 'index']);
Route::get('/shalat/create', [PrayerSchedulesController::class, 'create'])->name('shalat.create');
Route::get('/shalat/{id}/edit', [PrayerSchedulesController::class, 'edit'])->name('shalat.edit');
Route::post('/shalat', [PrayerSchedulesController::class, 'store'])->name('shalat.store');
Route::put('/shalat/{id}', [PrayerSchedulesController::class, 'update'])->name('shalat.update');

Route::get('/contact', [ContactMosquesController::class, 'index']);
