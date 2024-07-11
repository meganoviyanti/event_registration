<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\DaftarController;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;

// Route default untuk halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route untuk halaman about
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route untuk halaman contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route untuk halaman home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Route untuk halaman tiket
Route::get('/tiket', function () {
    return view('tiket');
})->name('tiket');

// Route untuk tiket
Route::get('/tikets', [TiketController::class, 'index'])->name('tikets.index');
Route::post('/tikets', [TiketController::class, 'store'])->name('tikets.store');

// Route default untuk otentikasi
Auth::routes();

// Route untuk home setelah login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Resource route untuk user dan tiket
Route::resource('user', UserController::class);
Route::resource('tiket', TiketController::class);

// Route untuk logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/daftar', [DaftarController::class, 'index']);
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar.index');
Route::get('/daftar/create', [DaftarController::class, 'create'])->name('daftar.create');
Route::get('/daftar/tampilan', [DaftarController::class, 'tampilan'])->name('daftar.tampilan');
Route::post('/daftar/store', [DaftarController::class, 'store'])->name('daftar.store');
Route::resource('daftar', DaftarController::class);

Route::get('/masuk', [UserController::class, 'index']);
Route::get('/masuk', [UserController::class, 'index'])->name('masuk.index');
Route::get('/register', [UserController::class, 'register'])->name('masuk.register');

Route::get('masuk/index', function () {
    return view('masuk.index');
});


Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/index', [TransaksiController::class, 'index'])->name('transaksi.index');


Route::get('/beli-tiket/{id}', [TiketController::class, 'beliTiket'])->name('beli.tiket');
