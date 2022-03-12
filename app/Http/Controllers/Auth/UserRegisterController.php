<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function register() 
	{
		return view('auth.register');
	}

	public function userRegistration(Request $request)
	{
		$validated = $request->validate([
			'name' => ['required', 'string', 'min:5', 'max:255'],
			'email' => ['required', 'string', 'max:255', 'email:filter', 'unique:users'],
			'password' => ['required', 'confirmed', Rules\Password::defaults()]
		]);

		$user = User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);
		
		event(New Registered($user));

		Auth::login($user);

		return view('auth.verify-email');
	}
}
