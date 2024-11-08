<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
// Subject Route
         Route::get('subject', [SubjectController::class, 'index'])->name('subject.index');
         Route::get('subject/create', [SubjectController::class, 'create'])->name('subject.create');
         Route::get('subject/edit/{subject}', [SubjectController::class, 'edit'])->name('subject.edit');
         Route::post('subject', [SubjectController::class, 'store'])->name('subject.store');
         Route::put('subject/{subject}', [SubjectController::class, 'update'])->name('subject.update');
         Route::delete('subject/{subject}', [SubjectController::class, 'destroy'])->name('subject.destroy');
