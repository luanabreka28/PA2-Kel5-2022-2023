<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PembelianController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\DashboardController;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('galeri', GaleriController::class);

        Route::resource('produk', ProdukController::class);
        Route::get('pemasukkan', [PembelianController::class, 'showPembelian']);
        Route::get('pemasukkan/{id}/show', [PembelianController::class, 'show']);


        // Route::get('pemasukkan', function () {
        //     return view('admin.pemasukkan.index');
        // });
    });
});
