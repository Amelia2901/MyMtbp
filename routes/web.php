<?php

use App\Http\Controllers\BannerAboutController;
use App\Http\Controllers\VisionController;
use App\Livewire\Dashboard;
use App\Http\Controllers\BannerDashboardController;
use App\Http\Controllers\BannerInfaqController;
use App\Http\Controllers\PrayerSchedulesController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\CategoriInfaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMosquesController;
use App\Http\Controllers\BaganController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerZakatController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\OrganizationalChartController;
use App\Http\Controllers\InfaqDescriptionController;
use App\Http\Controllers\methodPaymentController;
use App\Http\Controllers\ZakatEmasController;
use App\Http\Controllers\ZakatFitrahController;
use App\Http\Controllers\ZakatPenghasilanController;
use App\Http\Controllers\ZakatTernakPerdaganganController;




Route::get('/', [LandingController::class, 'index'])->name('landing.index');

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
    Route::get('/dashboard', Dashboard::class);
    Route::get('/dashboard2', Dashboard::class);
    Route::get('dashboard/login', [Dashboard::class, 'login'])->name('dashboard.login');
    Route::get('/banner', [BannerDashboardController::class, 'index'])->name('banner.index');
    Route::post('/banner', [BannerDashboardController::class, 'store'])->name('banner.store');

    // route shalat
    Route::get('/shalat', [PrayerSchedulesController::class, 'index'])->name('shalat.index');
    Route::get('/shalat/updatePrayerTimes', [PrayerSchedulesController::class, 'fetchData'])->name('shalat.fetch');
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
    Route::patch('/kegiatan/{id}/toggle', [ActivitiesController::class, 'toggle'])->name('kegiatan.toggle');

    //route contact
    Route::get('/dashboard/contact', [ContactMosquesController::class, 'index'])->name('contact.index');
    Route::get('/dashboard/contact/{id}/edit', [ContactMosquesController::class, 'edit'])->name('contact.edit');
    Route::put('/dashboard/contact/{id}', [ContactMosquesController::class, 'update'])->name('contact.update');

    // <!Route Struktur Organisasi -->

    // route banner
    Route::get('/banner-about', [BannerAboutController::class, 'index'])->name('banner-about.index');
    Route::post('/banner-about', [BannerAboutController::class, 'store'])->name('banner-about.store');

    // route visi misi
    Route::get('/visi_misi', [VisionController::class, 'index'])->name('vision.index');
    Route::get('/visi_misi/edit', [VisionController::class, 'edit'])->name('visi_misi.edit');
    Route::put('/visi_misi/update', [VisionController::class, 'store'])->name('visi_misi.store');
    // Route::put('/visi_misi/update/{id}', [VisionController::class, 'update'])->name('visi_misi.update');

    // route bagan struktur organisasi
    Route::get('/bagan', [BaganController::class, 'index'])->name('bagan.index');
    Route::put('/bagan', [BaganController::class, 'store'])->name('bagan.store');

    // route susunan organisasi dkm
    // Route::get('/organizational_chart', [OrganizationalChartController::class, 'index'])->name('organizational_chart.index');
    // Route::get('/organizational_chart/create', [OrganizationalChartController::class, 'create'])->name('organizational_chart.create');
    // Route::get('/organizational_chart/{id}/edit', [OrganizationalChartController::class, 'edit'])->name('organizational_chart.edit');
    // Route::post('/organizational_chart/store', [OrganizationalChartController::class, 'store'])->name('organizational_chart.store');
    // Route::put('/organizational_chart/{id}', [OrganizationalChartController::class, 'update'])->name('organizational_chart.update');

    // Route::resource('organizational_chart', OrganizationalChartController::class);

    Route::get('/organizational_chart', [OrganizationalChartController::class, 'index'])->name('organizational_chart.index');
Route::get('/organizational_chart/create', [OrganizationalChartController::class, 'create'])->name('organizational_chart.create');
Route::post('/organizational_chart', [OrganizationalChartController::class, 'store'])->name('organizational_chart.store');
Route::get('/organizational_chart/{id}/edit', [OrganizationalChartController::class, 'edit'])->name('organizational_chart.edit');
Route::put('/organizational_chart/{id}', [OrganizationalChartController::class, 'update'])->name('organizational_chart.update');

    

    // <!-- route infaq-->

    // route banner
    Route::get('/banner-infaq', [BannerInfaqController::class, 'index'])->name('banner-infaq.index');
    Route::post('/banner-infaq', [BannerInfaqController::class, 'store'])->name('banner-infaq.store');

    //route deskripsi infaq 1
    Route::get('/deskripsi-infaq', [InfaqDescriptionController::class, 'index'])->name('infaqDescription.index');
    Route::post('/deskripsi-infaq/update', [InfaqDescriptionController::class, 'store'])->name('infaqDescription.store');

    //route deskripsi infaq 2
    Route::get('/deskripsi-infaq2', [InfaqDescriptionController::class, 'index2'])->name('infaqDescription.index2');
    Route::post('/deskripsi-infaq2/update', [InfaqDescriptionController::class, 'store2'])->name('infaqDescription.store2');

    //route kategori infaq
    Route::post('/kategori-infaq/update', [CategoriInfaqController::class, 'storeOrUpdate'])->name('CategoriInfaq.storeOrUpdate');
    Route::get('/kategori-infaq', [CategoriInfaqController::class, 'index'])->name('CategoriInfaq.index');

    // route metode pembayaran
    Route::get('/dashboard/payment-method', [methodPaymentController::class, 'index'])->name('payment.index');
    Route::post('/dashboard/payment-method/updateBank', [methodPaymentController::class, 'store'])->name('payment.store');
    Route::post('/dashboard/payment-method/updateQRIS', [methodPaymentController::class, 'storeqris'])->name('payment.storeqris');

    // <!Route Zakat -->
    // Banner Zakat
    Route::get('/banner-zakat', [BannerZakatController::class, 'index'])->name('banner-zakat.index');
    Route::post('/banner-zakat', [BannerZakatController::class, 'store'])->name('banner-zakat.store'); 
    Route::put('/banner-zakat/{id}', [BannerZakatController::class, 'update'])->name('banner-zakat.update'); 

    //Route Zakat Emas
    Route::get('/zakat-emas', [ZakatEmasController::class, 'index'])->name('ZakatEmas.index');
    Route::post('/zakat-emas/update', [ZakatEmasController::class, 'storeOrUpdate'])->name('ZakatEmas.storeOrUpdate');

    //Route Zakat Fitrah
    Route::get('/zakat-fitrah', [ZakatFitrahController::class, 'index'])->name('ZakatFitrah.index');
    Route::post('/zakat-fitrah/update', [ZakatFitrahController::class, 'storeOrUpdate'])->name('ZakatFitrah.storeOrUpdate');

    //Route Zakat Penghasilan
    Route::get('/zakat-penghasilan', [ZakatPenghasilanController::class, 'index'])->name('ZakatPenghasilan.index');
    Route::post('/zakat-penghasilan/update', [ZakatPenghasilanController::class, 'storeOrUpdate'])->name('ZakatPenghasilan.storeOrUpdate');

    //Route Zakat ternak
    Route::get('/zakat-ternak', [ZakatTernakPerdaganganController::class, 'index'])->name('ZakatTernakPerdagangan.index');
    Route::post('/zakat-ternak/update', [ZakatTernakPerdaganganController::class, 'store'])->name('ZakatTernakPerdagangan.store');

    // route deskripsi infaq 2
    Route::get('/zakat-perdagangan', [ZakatTernakPerdaganganController::class, 'index2'])->name('ZakatTernakPerdagangan.index2');
    Route::post('/zakat-perdagangan/update', [ZakatTernakPerdaganganController::class, 'store2'])->name('ZakatTernakPerdagangan.store2');

    // Navbar Menu 
    Route::resource('navbar', NavbarController::class)
        ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
        ->names([
            'index' => 'navbar.index',
            'create' => 'navbar.create',
            'store' => 'navbar.store',
            'edit' => 'navbar.edit',
            'update' => 'navbar.update',
            'destroy' => 'navbar.destroy',
        ]);

    Route::post("/navbar/data", [NavbarController::class, 'data'])->name('navbar.data');
});