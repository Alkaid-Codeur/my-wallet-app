<?php

namespace App\Http\Controllers\Dash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
	{

		$user = Auth::user();
		$totalByCurrency = DB::table('users')
						->join('accounts', 'users.id', '=', 'accounts.user_id')
						->join('currencies', 'accounts.currency_id', '=', 'currencies.id')
						->select('users.id', 'users.name', 'currencies.name', 'currencies.symbol', DB::raw('sum(balance) as total'))
						->where('users.id', '=', $user->id)
						->groupBy('users.name', 'users.id', 'currencies.id', 'currencies.name', 'currencies.symbol')
						->get();
		//dd($totalByCurrency);
		return view('app.home', [
			'user' => $user, 
			'totalByCurrency' => $totalByCurrency
		]);
	}
}
