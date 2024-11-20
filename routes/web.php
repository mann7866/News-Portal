<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeJobController;
use App\Http\Controllers\LandinPageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', [LandinPageController::class, 'index'])->name('landing-page');
Route::get('news', [LandinPageController::class, 'news'])->name('news');
Route::get('news/{slug}', [LandinPageController::class, 'newsDetail'])->name('news.detail');

Route::middleware('auth')->group(callback: function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('administrator/dashboard', function () {
        return view('pages.super-admin.dashboard');
    })->name('dashboard');

    Route::prefix('administrator')->group(function () {

        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
        Route::get('news/edit/{slug}', [NewsController::class, 'edit'])->name('news.edit');
        Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');
        Route::post('news', [NewsController::class, 'store'])->name('news.store');
        Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

         // Category Route
         Route::get('category', [CategoryController::class, 'index'])->name('categories.index');
         Route::get('category/create', [CategoryController::class, 'create'])->name('categories.create');
         Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
         Route::post('category', [CategoryController::class, 'store'])->name('categories.store');
         Route::put('category/{category}', [CategoryController::class, 'update'])->name('categories.update');
         Route::delete('category/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

        // route employee
        Route::get('employee', action: [EmployeeController::class, 'index'])->name('employee.index');
        Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
        Route::get('employee/show/{employee}', action: [EmployeeController::class, 'show'])->name('employee.show');
        Route::get('employee/edit/{employee}', [EmployeeController::class, 'edit'])->name('employee.edit');
        Route::post('employee', [EmployeeController::class, 'store'])->name('employee.store');
        Route::put('employee/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
        Route::delete('employee/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

        // route employeeJob
        Route::get('employeeJob', action: [EmployeeJobController::class, 'index'])->name('employeeJob.index');
        Route::get('employeeJob/create', [EmployeeJobController::class, 'create'])->name('employeeJob.create');
        Route::get('employeeJob/show', action: [EmployeeJobController::class, 'show'])->name('employeeJob.show');
        Route::get('employeeJob/edit', [EmployeeJobController::class, 'edit'])->name('employeeJob.edit');
        Route::post('employeeJob', [EmployeeJobController::class, 'store'])->name('employeeJob.store');
        Route::put('employeeJob/{employeeJob}', [EmployeeJobController::class, 'update'])->name('employeeJob.update');
        Route::delete('employeeJob/{employeeJob}', [EmployeeJobController::class, 'destroy'])->name('employeeJob.destroy');

        require __DIR__ . '/rohman.php';

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


    Route::get('/profile-school', action: function () {
        return view('pages.landing-page.about.profileSchool');
    });
    Route::get('/vision', action: function () {
        return view('pages.landing-page.about.vision-and-mission');
    });
    Route::get('/structure', action: function () {
        return view('pages.landing-page.about.organizational-structure');
    });
    Route::get('/detail-news', action: function () {
        return view('pages.landing-page.news.detail');
    });

});
Route::get('/contact', action: function () {
    return view('pages.landing-page.contact.index');
});

Route::get('/admin/news', action: function () {
    return view('pages.admin.news.index');
});

Route::get('/admin', action: function () {
    return view('pages.admin.dashboard');
});

Route::get('/admin/history', function () {
    return view('pages.admin.history.index');
});

require __DIR__ . '/auth.php';
