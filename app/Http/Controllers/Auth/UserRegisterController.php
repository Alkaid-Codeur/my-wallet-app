<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AccountType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserRegisterController extends Controller
{
    public function register() 
	{
		$currencies = DB::table('currencies')->orderBy('name')->get();
		return view('auth.register', [
			'currencies' => $currencies
		]);
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

		$setting = $user->settings()->create([
			'currency_id' => $request->currency
		]);

		$type = AccountType::where('value', 'General')->first();

		$account = $user->accounts()->create([
			'name' => 'Cash',
			'balance' => 0,
			'currency_id' => $request->currency,
			'type_id' => $type->id,
		]);
		
		event(New Registered($user));

		Auth::login($user);

		return view('auth.verify-email');
	}
}
