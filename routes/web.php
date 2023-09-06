<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('transaksi.index');


// Rute untuk menampilkan daftar transaksi
Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');

// Rute untuk menampilkan formulir tambah transaksi
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');

// Rute untuk menyimpan transaksi baru
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');

// Rute untuk menampilkan detail transaksi
Route::get('/transaksi/{transaksi}', [TransaksiController::class, 'show'])->name('transaksi.show');

// Rute untuk menampilkan formulir edit transaksi
Route::get('/transaksi/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');

// Rute untuk memperbarui transaksi
Route::put('/transaksi/{transaksi}', [TransaksiController::class, 'update'])->name('transaksi.update');

// Rute untuk menghapus transaksi
Route::delete('/transaksi/{transaksi}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');

// Rute untuk menampilkan formulir tambah pembeli
Route::get('/pembeli/create', [PembeliController::class, 'create'])->name('pembeli.create');

// Rute untuk menyimpan pembeli baru
Route::post('/pembeli', [PembeliController::class, 'store'])->name('pembeli.store');

// Rute untuk menampilkan formulir tambah barang
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');

// Rute untuk menyimpan barang baru
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
