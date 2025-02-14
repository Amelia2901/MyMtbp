<?php

use App\Livewire\Dashboard;
use App\Http\Controllers\BannerDashboardController;
use App\Http\Controllers\PrayerSchedulesController;
use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMosquesController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('strukturOrganisasi');
});

Route::get('/schedule', function () {
    return view('index');
});

Route::get('/infaq', function () {
    return view('infaq');
});
Route::get('/contact', function () {
    return view('index');
});

Route::get('/zakat', function () {
    return view('zakat');
});

Route::get('/dashboard', [Dashboard::class, 'index']);
Route::get('/dashboard2', Dashboard::class);
Route::get('dashboard/login', [Dashboard::class, 'login'])->name('dashboard.login');
Route::get('/banner', [BannerDashboardController::class, 'index'])->name('banner.index');
Route::post('/banner', [BannerDashboardController::class, 'store'])->name('banner.store');

Route::get('/shalat', [PrayerSchedulesController::class, 'index'])->name('shalat.index');
Route::get('/shalat/create', [PrayerSchedulesController::class, 'create'])->name('shalat.create');
Route::get('/shalat/{id}/edit', [PrayerSchedulesController::class, 'edit'])->name('shalat.edit');
Route::post('/shalat/store', [PrayerSchedulesController::class, 'store'])->name('shalat.store');
Route::put('/shalat/{id}', [PrayerSchedulesController::class, 'update'])->name('shalat.update');

// route kegiatan 
Route::get('/kegiatan', [ActivitiesController::class, 'index'])->name('kegiatan.index');
Route::get('/kegiatan/create', [ActivitiesController::class, 'create'])->name('kegiatan.create');
Route::get('/kegiatan/{id}/edit', [ActivitiesController::class, 'edit'])->name('kegiatan.edit');
Route::post('/kegiatan/store', [ActivitiesController::class, 'store'])->name('kegiatan.store');
Route::put('/kegiatan/{id}', [ActivitiesController::class, 'update'])->name('kegiatan.update');


//route contact
Route::get('/dashboard/contact', [ContactMosquesController::class, 'index'])->name('contact.index');
Route::get('/dashboard/contact/{id}/edit', [ContactMosquesController::class, 'edit'])->name('contact.edit');
Route::put('/dashboard/contact/{id}', [ContactMosquesController::class, 'update'])->name('contact.update');