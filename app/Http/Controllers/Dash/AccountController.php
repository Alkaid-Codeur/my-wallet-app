<?php

namespace App\Http\Controllers\Dash;

use App\Models\Account;
use App\Models\Currency;
use App\Models\AccountType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$accounts = Account::all();
        return view('app.accounts.index', [
			'accounts' => $accounts,
		]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$account = new Account();
		$account_types = AccountType::all();
		$currencies = DB::table('currencies')->orderBy('name')->get();
        return view('app.accounts.new', [
			'account' => $account,
			'types' => $account_types,
			'currencies' => $currencies
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
			'name' => ['required', 'between:3,20', 'unique:accounts'],
			'balance' => ['required', 'numeric', 'digits_between:1,12'],
			'type' => ['required', 'filled', 'exists:account_types,id'],
			'currency' => ['required', 'filled', 'exists:currencies,id']
		]);

		$account = Account::create([
			'name' => $request->name,
			'balance' => $request->balance,
			'type_id' => $request->type,
			'currency_id' => $request->currency,
			'user_id' => Auth::user()->id
		]);

		$message = <<<HTML
			Le compte <span class="font-bold underline text-lg uppercase"> $account->name </span> a été ajouté!
		HTML;
		return redirect()->route('account.index')->with('createdSuccess', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return view ('app.accounts.show', [
			'account' => $account,
			'currency' => $account->currency->symbol
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
		$account_types = AccountType::all();
		$currencies = DB::table('currencies')->orderBy('name')->get();
        return view('app.accounts.edit', [
			'account' => $account,
			'types' => $account_types,
			'currencies' => $currencies,
		] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
		$validation = $request->validate([
			'name' => ['required', 'between:3,20', Rule::unique('accounts', 'name')->ignore($account->id)],
			'balance' => ['required', 'numeric', 'digits_between:1,12'],
			'type' => ['required', 'filled', 'exists:account_types,id'],
			'currency' => ['required', 'filled', 'exists:currencies,id']
		]);
		$account->update([
			'name' => $request->name,
			'balance' => $request->balance,
			'type_id' => $request->type,
			'currency_id' => $request->currency
		]);
		return redirect()->route('account.show', ['account' => $account])->with('updateStatus', 'Le compte a été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
		$message = <<<HTML
			Le compte <span class="font-bold underline text-lg uppercase"> $account->name </span> a bien été supprimé !
		HTML;

		$account->delete();
		return redirect()->route('account.index')->with('delete', $message);
    }
}
