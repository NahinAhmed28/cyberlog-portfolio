<?php

use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Middleware\EnsureAdmin;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth', EnsureAdmin::class])->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::get('/content/{module}', [ContentController::class, 'index'])->name('content.index');
    Route::get('/content/{module}/create', [ContentController::class, 'create'])->name('content.create');
    Route::post('/content/{module}', [ContentController::class, 'store'])->name('content.store');
    Route::get('/content/{module}/{id}/edit', [ContentController::class, 'edit'])->whereNumber('id')->name('content.edit');
    Route::put('/content/{module}/{id}', [ContentController::class, 'update'])->whereNumber('id')->name('content.update');
    Route::delete('/content/{module}/{id}', [ContentController::class, 'destroy'])->whereNumber('id')->name('content.destroy');
    Route::post('/content/{module}/{id}/restore', [ContentController::class, 'restore'])->whereNumber('id')->name('content.restore');
    Route::get('/media', [MediaController::class, 'index'])->name('media.index');
    Route::post('/media', [MediaController::class, 'store'])->name('media.store');
    Route::delete('/media/{media}', [MediaController::class, 'destroy'])->name('media.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
    Route::get('/inquiries/{id}', [InquiryController::class, 'show'])->whereNumber('id')->name('inquiries.show');
    Route::put('/inquiries/{id}', [InquiryController::class, 'update'])->whereNumber('id')->name('inquiries.update');
});
