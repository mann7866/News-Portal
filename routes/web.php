<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.user.landing-pages.index');
});

Route::get('/dashboard', function () {
    return view('pages.super-admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('administrator')->group(function () {
        
        // News Route
        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
        Route::get('news/edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
        Route::post('news', [NewsController::class, 'store'])->name('news.store');
        Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');
        
        // Category Route
        Route::get('category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('category', [CategoryController::class, 'store'])->name('category.store');
        Route::put('category/{category}', [CategoryController::class, 'update'])->name('category.update');
        
    });
    Route::get('/approval', function () {
        return view('pages.super-admin.approval.index');
    });
    Route::get('/category', function () {
        return view('pages.super-admin.category.index');
    });
    Route::get('/teacher', function () {
        return view('pages.super-admin.teacher.index');
    });
    Route::get('/account', function () {
        return view('pages.super-admin.account.index');
    });
});

require __DIR__ . '/auth.php';
require __DIR__ . '/Zaky.php';
