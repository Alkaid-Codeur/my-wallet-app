<?php

use App\Http\Controllers\Dash\DashboardController;
use App\Http\Controllers\Dash\SettingsController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function() {
	Route::get('/home', [DashboardController::class, 'dashboard'] )->name('dashboard');

	Route::get('/settings', [SettingsController::class, 'setSettings'] )->name('settings');
});

