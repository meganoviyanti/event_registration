<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\RegistrationController;
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

// Route untuk menyimpan data registrasi (gunakan URL dan nama rute yang unik)
Route::post('/register/simple', function () {
    // Logic untuk menyimpan data pendaftaran bisa ditambahkan di sini
    return redirect()->back()->with('message', 'Registration successful!');
})->name('register.simple');

// Route untuk form registrasi
Route::get('/register', [RegistrationController::class, 'create'])->name('registration.create');

// Debugging untuk memastikan rute terdaftar
Route::get('/debug', function () {
    return response()->json([
        'registration_create_exists' => Route::has('registration.create')
    ]);
});

// Route untuk menyimpan data registrasi melalui controller
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');

// Route lainnya terkait registrasi
Route::get('/register/success', [RegistrationController::class, 'success'])->name('registration.success');
Route::get('/transaction', [RegistrationController::class, 'transaction'])->name('transaction.show');
Route::post('/transaction', [RegistrationController::class, 'processTransaction'])->name('transaction.process');

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



Route::get('/register', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/transaction', [RegistrationController::class, 'transaction'])->name('transaction.show');
Route::post('/transaction', [RegistrationController::class, 'processTransaction'])->name('transaction.process');
Route::get('/register/success', [RegistrationController::class, 'success'])->name('registration.success');

Route::get('/register', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/transaction', [RegistrationController::class, 'transaction'])->name('registration.transaction'); // Pastikan rute ini sudah didefinisikan
Route::post('/transaction', [RegistrationController::class, 'processTransaction'])->name('transaction.process');
Route::get('/register/success', [RegistrationController::class, 'success'])->name('registration.success');

//pendaftaran
Route::get('/pendaftaran', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('/pendaftaran', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/pendaftaran', [RegistrationController::class, 'index'])->name('registration.index');
Route::get('/pendaftaran/transaction', function () {
    return view('transaction');
})->name('registration.transaction');

Route::resource('registration', RegistrationController::class);

Route::get('/registration', [RegistrationController::class, 'index'])->name('registration.index');
Route::get('/registration/create', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/registration/store', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/registration/{id}/edit', [RegistrationController::class, 'edit'])->name('registration.edit');

Route::put('/registration/{id}/update', [RegistrationController::class, 'update'])->name('registration.update');
Route::delete('/registration/{pendaftaran}/delete', [RegistrationController::class, 'destroy'])->name('registration.destroy');
