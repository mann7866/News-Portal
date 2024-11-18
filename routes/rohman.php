<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\OrganizationController;

// Subject Route
Route::get('subject', [SubjectController::class, 'index'])->name('subject.index');
Route::get('subject/create', [SubjectController::class, 'create'])->name('subject.create');
Route::get('subject/edit/{subject}', [SubjectController::class, 'edit'])->name('subject.edit');
Route::post('subject', [SubjectController::class, 'store'])->name('subject.store');
Route::put('subject/{subject}', [SubjectController::class, 'update'])->name('subject.update');
Route::delete('subject/{subject}', [SubjectController::class, 'destroy'])->name('subject.destroy');

// Organization Route
Route::get('organization', [OrganizationController::class, 'index'])->name('organization.index');
Route::get('organization/create', [organizationController::class, 'create'])->name('organization.create');
Route::get('organization/edit/{organization}', [organizationController::class, 'edit'])->name('organization.edit');
Route::post('organization', [organizationController::class, 'store'])->name('organization.store');
Route::put('organization/{organization}', [organizationController::class, 'update'])->name('organization.update');
Route::delete('organization/{organization}', [organizationController::class, 'destroy'])->name('organization.destroy');

    
