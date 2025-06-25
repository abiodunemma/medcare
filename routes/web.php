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