<?php

use Illuminate\Support\Facades\Route;
use App\Models\SuratMasuk;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\ProfileController;

// LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// HALAMAN YANG HARUS LOGIN
Route::middleware('auth')->group(function () {

    // DASHBOARD
    Route::get('/', function () {
        $totalSurat = SuratMasuk::count();
        $totalInternal = SuratMasuk::where('jenis_surat', 'Internal')->count();
        $totalEksternal = SuratMasuk::where('jenis_surat', 'Eksternal')->count();
        $suratTerbaru = SuratMasuk::latest()->take(5)->get();

        return view('dashboard', compact(
            'totalSurat',
            'totalInternal',
            'totalEksternal',
            'suratTerbaru'
        ));
    })->name('dashboard');

    // PROFIL PENGGUNA
    Route::get('/profil', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profil', [ProfileController::class, 'update'])->name('profile.update');

    // GANTI PASSWORD
    Route::get('/ubah-password', [ProfileController::class, 'password'])->name('password');
    Route::put('/ubah-password', [ProfileController::class, 'updatePassword'])->name('password.update');

    // KHUSUS ADMIN: MENGELOLA ARSIP
    Route::middleware('admin')->group(function () {
        Route::resource('surat-masuk', SuratMasukController::class)
            ->only(['create', 'store', 'edit', 'update', 'destroy']);
    });

    // ADMIN DAN PENGGUNA: MELIHAT ARSIP
    Route::resource('surat-masuk', SuratMasukController::class)
        ->only(['index', 'show']);

    // LAPORAN
    Route::get('/laporan', function () {
        $suratMasuks = SuratMasuk::latest()->get();
        return view('laporan', compact('suratMasuks'));
    })->name('laporan');
});