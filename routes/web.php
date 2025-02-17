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
use App\Http\Controllers\BaganController;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('strukturOrganisasi');
});

// Route::get('/schedule', function () {
//     return view('index');
// });

Route::get('/infaq', function () {
    return view('infaq');
});

// Route::get('/contact', function () {
//     return view('index');
// });

Route::get('/zakat', function () {
    return view('zakat');
});

// Authentication
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
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

    // <Route Struktur Organisasi>

    // route banner
    Route::get('/banner-about', [BannerAboutController::class, 'index'])->name('banner-about.index');
    Route::post('/banner-about', [BannerAboutController::class, 'store'])->name('banner-about.store');

    // route visi misi
    Route::get('/visi_misi', [VisionController::class, 'index']);
    Route::get('/visi_misi/edit', [VisionController::class, 'edit'])->name('visi_misi.edit');
    Route::put('/visi_misi/update/{id}', [VisionController::class, 'update'])->name('visi_misi.update');

    // route bagan struktur organisasi
    Route::get('/bagan', [BaganController::class, 'index'])->name('bagan.index');
    Route::post('/bagan', [BaganController::class, 'store'])->name('bagan.store');

    // route susunan organisasi dkm
    Route::prefix('organizational_chart')->group(function () {
        Route::get('/', [OrganizationalChartController::class, 'index'])->name('organizational_chart.index');
        Route::get('/create', [OrganizationalChartController::class, 'create'])->name('organizational_chart.create');
        Route::post('/store', [OrganizationalChartController::class, 'store'])->name('organizational_chart.store');
        Route::get('/edit/{id}', [OrganizationalChartController::class, 'edit'])->name('organizational_chart.edit');
        Route::put('/update/{id}', [OrganizationalChartController::class, 'update'])->name('organizational_chart.update');
        Route::delete('/delete/{id}', [OrganizationalChartController::class, 'destroy'])->name('organizational_chart.destroy');

        // route susunan organisasi dkm
        Route::prefix('organizational_chart')->group(function () {
            Route::get('/', [OrganizationalChartController::class, 'index'])->name('organizational_chart.index');
            Route::get('/create', [OrganizationalChartController::class, 'create'])->name('organizational_chart.create');
            Route::post('/store', [OrganizationalChartController::class, 'store'])->name('organizational_chart.store');
            Route::get('/edit/{id}', [OrganizationalChartController::class, 'edit'])->name('organizational_chart.edit');
            Route::put('/update/{id}', [OrganizationalChartController::class, 'update'])->name('organizational_chart.update');
            Route::delete('/delete/{id}', [OrganizationalChartController::class, 'destroy'])->name('organizational_chart.destroy');


            //route infaq
            Route::get('/banner_infaq', [OrganizationalChartController::class, 'banner_infaq'])->name('banner_infaq.index');
            Route::get('/deskripsi_infaq_satu', [OrganizationalChartController::class, 'deskripsi_infaq_satu'])->name('deskripsi_infaq_satu.index');
            Route::get('/deskripsi_infaq_dua', [OrganizationalChartController::class, 'deskripsi_infaq_dua'])->name('deskripsi_infaq_dua.index');
            Route::get('/kategori_infaq', [OrganizationalChartController::class, 'kategori_infaq'])->name('kategori_infaq.index');
            Route::get('/metode_pembayaran', [OrganizationalChartController::class, 'metode_pembayaran'])->name('metode_pembayaran.index');
        });
    });
});
