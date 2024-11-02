<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.super-admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/teacher', function () {
        return view('pages.super-admin.teacher.index');
    });
    Route::get('/news', function () {
        return view('pages.super-admin.news.index');
    });
    Route::get('/account', function () {
        return view('pages.super-admin.account.index');
    });
});

require __DIR__ . '/auth.php';
