<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.user.landing-pages.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('administrator')->group(function () {
        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
        Route::get('news/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::post('news', [NewsController::class, 'store'])->name('news.store');
        Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

        // route Teacher
        Route::get('teacher', action: [TeacherController::class, 'index'])->name('teacher.index');
        Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
        Route::get('teacher/show', action: [TeacherController::class, 'show'])->name('teacher.show');
        Route::get('teacher/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
        Route::post('teacher', [TeacherController::class, 'store'])->name('teacher.store');
        Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');

    });
    Route::get('/approval', function () {
        return view('pages.super-admin.approval.index');
    });
    Route::get('/teacher', function () {
        return view('pages.super-admin.teacher.index');
    });
    Route::get('/account', function () {
        return view('pages.super-admin.account.index');
    });

});

require __DIR__ . '/auth.php';
