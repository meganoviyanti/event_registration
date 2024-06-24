<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/register', function () {
    // Logic untuk menyimpan data pendaftaran bisa ditambahkan di sini
    return redirect()->back()->with('message', 'Registration successful!');
})->name('register');


'Auth'::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user',UserController::class);
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');



// routes/web.php








