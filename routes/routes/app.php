<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function() {
	Route::get('/home', function() {
		return view('app.home');
	});

	Route::get('/settings', function() {
		return view('app.settings');
	});
});

