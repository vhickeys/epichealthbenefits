<?php

use App\Http\Controllers\MainApp\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/')->group(function () {
    Route::get('', [HomepageController::class, 'index'])->name('homepage');
    Route::get('about', [HomepageController::class, 'about'])->name('about');
});
