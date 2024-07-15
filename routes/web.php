<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ReviewController;

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

// Route untuk Daftar
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar.index');
Route::get('/daftar/create', [DaftarController::class, 'create'])->name('daftar.create');
Route::get('/daftar/tampilan', [DaftarController::class, 'tampilan'])->name('daftar.tampilan');
Route::post('/daftar/store', [DaftarController::class, 'store'])->name('daftar.store');
Route::resource('daftar', DaftarController::class);

// Route untuk halaman login dan register
Route::get('/masuk', [UserController::class, 'index'])->name('masuk.index');
Route::get('/register', [UserController::class, 'register'])->name('masuk.register');

// Route untuk blog
Route::get('blog', function () {
    return view('index/blog');
});
Route::get('/index/blog', function () {
    return view('index.blog');
})->middleware('auth');

// Route untuk transaksi
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/index', [TransaksiController::class, 'index'])->name('transaksi.index');

// Route untuk membeli tiket
Route::get('/beli-tiket/{id}', [TiketController::class, 'beliTiket'])->name('beli.tiket');

// Route untuk reviews
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::patch('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

