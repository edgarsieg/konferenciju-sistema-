<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ConferenceController as AdminConferenceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('client')->name('client.')->group(function () {
    Route::get('/conferences', [ClientController::class, 'index'])->name('conferences.index');
    Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('conferences.show');
    Route::post('/conferences/{id}/register', [ClientController::class, 'register'])->name('conferences.register');
});

Route::prefix('employee')->name('employee.')->group(function () {
    Route::get('/conferences', [EmployeeController::class, 'index'])->name('conferences.index');
    Route::get('/conferences/{id}', [EmployeeController::class, 'show'])->name('conferences.show');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

    Route::get('/conferences', [AdminConferenceController::class, 'index'])->name('conferences.index');
    Route::get('/conferences/create', [AdminConferenceController::class, 'create'])->name('conferences.create');
    Route::post('/conferences', [AdminConferenceController::class, 'store'])->name('conferences.store');
    Route::get('/conferences/{id}', [AdminConferenceController::class, 'show'])->name('conferences.show');
    Route::get('/conferences/{id}/edit', [AdminConferenceController::class, 'edit'])->name('conferences.edit');
    Route::put('/conferences/{id}', [AdminConferenceController::class, 'update'])->name('conferences.update');
    Route::delete('/conferences/{id}', [AdminConferenceController::class, 'destroy'])->name('conferences.destroy');
});
