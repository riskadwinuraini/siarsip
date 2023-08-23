<?php

use App\Http\Controllers\ArsipController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArsipController::class,'index']);
Route::get('/tambah', [ArsipController::class,'create']);

