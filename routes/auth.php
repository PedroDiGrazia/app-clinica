<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SecretariaController;
use App\Http\Controllers\Auth\SecretariaLoginController;
use App\Http\Controllers\Auth\PsicologoController;

Route::middleware('guest')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('secretaria', [SecretariaLoginController::class, 'create'])->name('secretaria');

    Route::post('secretaria', [SecretariaLoginController::class, 'store']);

    Route::get('secretariaregister', [SecretariaController::class, 'create_register'])->name('secretariaregister');

    Route::post('secretariaregister', [SecretariaController::class, 'store_register']);

    Route::get('psicologoregister', [PsicologoController::class, 'create_register'])->name('psicologoregister');

    Route::post('psicologoregister', [PsicologoController::class, 'store_register']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');

    Route::get('dashboard_secretaria', [SecretariaController::class, 'create_dashboard'])->name('dashboard_secretaria');

    Route::post('dashboard_secretaria', [SecretariaController::class, 'store']);

    Route::get('dashboard_psicologo', [PsicologoController::class, 'create_dashboard'])->name('dashboard_psicologo');

    Route::post('dashboard_psicologo', [PsicologoController::class, 'store']);

    Route::get('psicologologin', [PsicologoController::class, 'create'])->name('psicologologin');

    Route::post('psicologologin', [PsicologoController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

});
