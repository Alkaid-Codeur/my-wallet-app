<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthentificationController extends Controller
{
    public function login()
	{
		return view('auth.login');
	}

	public function authentificate(Request $request)
	{
		$credentials = $request->validate([
			'email' => ['required', 'string', 'max:255', 'email:filter'],
			'password' => ['required']
		]);
		$remember = $request->boolean('remember');
		if(Auth::attempt($credentials, $remember)) {
			$request->session()->regenerate();
			return redirect()->intended('/home');
		}
		return back()->withErrors(['email' => 'Ces identifiants ne correspondent pas à nos enregistrements.']);
		//dd($request);
	}

	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect('/login');
	}
}
