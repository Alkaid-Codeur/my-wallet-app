<?php

use Illuminate\Support\Facades\DB;
use App\Mail\Auth\MailVerification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Models\Accounts;

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

Route::get('/test', function () {
    return view('test');
});

// Main space : landing page, about, help...
Route::get('/', function() {
	return view('home');
})->name('welcome');



// Authentification 

require 'routes/auth.php';

// App interface..
require 'routes/app.php';

