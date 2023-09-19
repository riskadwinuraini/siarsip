<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/fetch-user/{id}', [UserController::class, 'fetchUser'])->name('admin.user.fetch');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
