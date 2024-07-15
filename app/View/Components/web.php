<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\DaftarController;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/generate-pdf', [TiketController::class, 'generatePDF'])->name('generate-pdf');
Route::get('/download-pdf', [PdfController::class, 'generatePdf'])->name('download-pdf');
Route::get('/myPDF', function () {
    return view('myPDF');
})->name('myPDF');

