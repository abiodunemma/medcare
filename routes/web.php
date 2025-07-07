<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;




Route::get('/', function () {
    return view('index'); // Landing/homepage
})->name('home');

Route::get('/doctor', [IndexController::class, 'index'])->name('doctor'); // Doctor page

Route::get('/details', [IndexController::class, 'details'])->name('details'); // Details page

Route::get('/about', function () {
    return view('about'); // About page
})->name('about');

Route::get('/contact', function () {
    return view('contact'); // Contact page
})->name('contact');


Route::get('/login', [IndexController::class, 'login']);

// For showing the login form
Route::get('/auth/login', [IndexController::class, 'showLogin'])->name('login');

// For showing the registration form
Route::get('/auth/register', [IndexController::class, 'showRegister'])->name('register');

//profile
Route::get('/profile', [IndexController::class, 'profile'])->name('profile');
