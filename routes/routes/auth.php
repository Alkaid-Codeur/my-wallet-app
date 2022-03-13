<?php

use App\Http\Controllers\Auth\MailVerificationController;
use App\Http\Controllers\Auth\UserAuthentificationController;
use App\Http\Controllers\Auth\UserRegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function() {
	Route::get('/register', [UserRegisterController::class, 'register'])->name('register');

	Route::post('/register', [UserRegisterController::class, 'userRegistration']);

	Route::get('/login', [UserAuthentificationController::class, 'login'])->name('login');

	Route::post('/login', [UserAuthentificationController::class, 'authentificate']);

});

Route::middleware('auth')->group(function() {
	Route::get('/verify-email', [MailVerificationController::class, 'notice'])->name('verification.notice');

	Route::get('/email/verify/{id}/{hash}', [MailVerificationController::class, 'verifyEmail'])->name('verification.verify');

	Route::post('/email/verification-notification', [MailVerificationController::class, 'sendVerificationNotification'])->name('verification.send');

	Route::post('/logout', [UserAuthentificationController::class, 'logout'])->name('logout');
});

