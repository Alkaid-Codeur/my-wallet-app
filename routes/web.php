<?php

use App\Http\Controllers\Auth\UserRegisterController;
use App\Mail\Auth\MailVerification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
	return view('home');
})->name('welcome');

// Authentification 

// Route::get('/register', [UserRegisterController::class, 'create'])->name('register');

Route::get('/test', function() {
	return view('test');
});

require 'routes/auth.php';

Route::get('/home', function() {
	return view('app.home');
})->middleware(['auth', 'verified']);


