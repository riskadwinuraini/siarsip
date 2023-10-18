<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArchiveController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\CupboardController;
use App\Http\Controllers\Admin\FileLoanController;
use App\Http\Controllers\Admin\FilingController;
use App\Http\Controllers\Admin\HistoryController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('archive', ArchiveController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('cupboard', CupboardController::class);

Route::get('pinjaman', [FileLoanController::class, 'index'])->name('loan.index');
Route::get('create-pinjaman', [FileLoanController::class, 'create'])->name('loan.create');
Route::post('store-pinjaman', [FileLoanController::class, 'store'])->name('loan.store');
Route::post('/update-status', [FileLoanController::class, 'update']);

Route::get('history-pinjaman', [HistoryController::class, 'loanHistory'])->name('loan.story');
Route::get('/export/history-pinjaman', [HistoryController::class, 'exportPinjaman']);
Route::get('history-pengembalian', [HistoryController::class, 'pengembalianHistory'])->name('loan.return.history');
Route::get('/export/history-pengembalian', [HistoryController::class, 'exportPengembalian']);

Route::get('pemberkasan', [FilingController::class, 'index'])->name('filing.index');
Route::get('create-pemberkasan', [FilingController::class, 'create'])->name('filing.create');
Route::post('process-create-document',[FilingController::class, 'proccessCreateDocument'])->name('proccessCreateDocument');