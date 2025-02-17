<?php

use App\Http\Controllers\BannerAboutController;
use App\Http\Controllers\VisionController;
use App\Livewire\Dashboard;
use App\Http\Controllers\BannerDashboardController;
use App\Http\Controllers\PrayerSchedulesController;
use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMosquesController;
use App\Http\Controllers\OrganizationalChartController;


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

// route struktur organisasi
// Route::get('/banner-about', [BannerAboutController::class, 'index']);
Route::get('/banner-about', [BannerAboutController::class, 'index'])->name('banner-about.index');
Route::post('/banner-about', [BannerAboutController::class, 'store'])->name('banner-about.store');

// route visi misi
Route::get('/vision', [VisionController::class, 'index']);
Route::get('/vision/edit', [VisionController::class, 'edit'])->name('vision.edit');
Route::put('/vision/update/{id}', [VisionController::class, 'update'])->name('vision.update');

Route::prefix('organizational_chart')->group(function () {
    Route::get('/', [OrganizationalChartController::class, 'index'])->name('organizational_chart.index');
    Route::get('/create', [OrganizationalChartController::class, 'create'])->name('organizational_chart.create');
    Route::post('/store', [OrganizationalChartController::class, 'store'])->name('organizational_chart.store');
    Route::get('/edit/{id}', [OrganizationalChartController::class, 'edit'])->name('organizational_chart.edit');
    Route::put('/update/{id}', [OrganizationalChartController::class, 'update'])->name('organizational_chart.update');
    Route::delete('/delete/{id}', [OrganizationalChartController::class, 'destroy'])->name('organizational_chart.destroy');
});

