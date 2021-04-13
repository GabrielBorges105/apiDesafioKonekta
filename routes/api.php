<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ParticipationController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('users/register', [UserController::class, 'store'])->name('user.create');

Route::group([
    'middleware' => 'apiJwt',
], function ($router) {
    Route::get('participations', [ParticipationController::class, 'index'])->name('participation.index');
    Route::post('participations/store', [ParticipationController::class, 'store'])->name('participation.store');
    Route::post('participations/{id}/update', [ParticipationController::class, 'update'])->name('participation.update');
    Route::get('participations/{id}/delete', [ParticipationController::class, 'destroy'])->name('participation.delete');
    Route::get('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
});