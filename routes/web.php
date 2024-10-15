<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');


Route::get('/daftar-barang', [BarangController::class, 'index'])->name('daftar.barang');








Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');

Route::get('/barang-masuk', [BarangMasukController::class, 'index'])->name('barang-masuk.index');
Route::get('/barang-masuk/create', [BarangMasukController::class, 'create'])->name('barang-masuk.create');
Route::post('/barang-masuk', [BarangMasukController::class, 'store'])->name('barang-masuk.store');
Route::get('/barang-masuk/{barangMasuk}/edit', [BarangMasukController::class, 'edit'])->name('barang-masuk.edit');
Route::put('/barang-masuk/{barangMasuk}', [BarangMasukController::class, 'update'])->name('barang-masuk.update');
Route::delete('/barang-masuk/{barangMasuk}', [BarangMasukController::class, 'destroy'])->name('barang-masuk.destroy');

Route::get('/barang-keluar', [BarangKeluarController::class, 'index'])->name('barang-keluar.index');
Route::get('/barang-keluar/create', [BarangKeluarController::class, 'create'])->name('barang-keluar.create');
Route::post('/barang-keluar', [BarangKeluarController::class, 'store'])->name('barang-keluar.store');
Route::get('/barang-keluar/{barangKeluar}/edit', [BarangKeluarController::class, 'edit'])->name('barang-keluar.edit');
Route::put('/barang-keluar/{barangKeluar}', [BarangKeluarController::class, 'update'])->name('barang-keluar.update');
Route::delete('/barang-keluar/{barangKeluar}', [BarangKeluarController::class, 'destroy'])->name('barang-keluar.destroy');





Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');








