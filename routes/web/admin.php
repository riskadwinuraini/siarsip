<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArchiveController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\CupboardController;
use App\Http\Controllers\Admin\FileLoanController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('archive', ArchiveController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('cupboard', CupboardController::class);

Route::get('pinjaman', [FileLoanController::class, 'index'])->name('loan.index');
Route::get('/create-pinjaman', [FileLoanController::class, 'create'])->name('loan.create');