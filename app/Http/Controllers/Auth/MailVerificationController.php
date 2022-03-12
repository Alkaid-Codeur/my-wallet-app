<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class MailVerificationController extends Controller
{
    public function notice() 
	{
		return view('auth.verify-email');
	}

	public function sendVerificationNotification(Request $request)
	{
		if($request->user()->hasVerifiedEmail()) {
			return redirect(RouteServiceProvider::HOME);
		}
		$request->user()->sendEmailVerificationNotification();
		return back()->with('status', 'verification-link-sent');
	}

	public function verifyEmail(EmailVerificationRequest $request) {
		if($request->user()->hasVerifiedEmail()) {
			return redirect(RouteServiceProvider::HOME.'?verified=1');
		}
		$request->fulfill();
		event(new Verified($request->user()));
		return redirect(RouteServiceProvider::HOME.'?verified=1');
	}
}
