@props(['account', 'action', 'types', 'currencies'])

<div class="mt-4 -mx-4 sd:mx-0">
	<div class="p-6 bg-white rounded-md shadow-md">
		<h2 class="text-lg font-semibold text-gray-700 capitalize">Compte  {{$account->name}} </h2>
		<form action="{{ $action === "edit" ? route('account.update', ['account' => $account]) : route('account.store')}}" method="POST">
			@if ($action === "edit")
				@method('PUT')	
			@endif
			
			@csrf
			<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
				<div>
					<label class="text-gray-700" for="username">Nouveau nom</label>
					<input name="name" class="text-gray-600 w-full mt-2 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500 @error('new_name') is-invalid @enderror"" type="text" value="{{old('name') ?? $account->name}}" required>
				</div>
				<div>
					<label class="text-gray-700" for="emailAddress">Nouveau Solde</label>
					<input name="balance" class="text-gray-600 w-full mt-2 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500 @error('new_balance') is-invalid @enderror"" type="number" value="{{old('balance') ?? $account->balance}}" required>
				</div>
				<div>
					<label class="text-gray-700" for="account_type">Type</label>
					<select name="type" id="account_type" class="w-full mt-2 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500" required>
						@foreach ($types as $item)
							@if (isset($account->id))
								<option value="{{$item->id}}" @selected(empty(old()) ? $item->id === $account->type->id : $item->id === old('account_type'))>{!! $item->icon !!} {{$item->value}}</option>
							@else
								<option value="{{$item->id}}" @selected($item->id === old('account_type'))>{!! $item->icon !!} {{$item->value}}</option>
							@endif

						@endforeach
					</select>
				</div>
				<div>
					<label class="text-gray-700" for="currency">Choisir la devise</label>
					<select name="currency" id="currency" class="w-full mt-2 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500">
						@foreach ($currencies as $currency)
							@if (isset($account->id))
								<option value="{{($currency->id)}}" @selected(empty(old()) ? $currency->id === $account->currency->id : $currency->id === old('currency'))>
								{{$currency->code}} - {{$currency->name}}</option>
							@else
								<option value="{{($currency->id)}}" @selected($currency->id === old('currency'))>
								{{$currency->code}} - {{$currency->name}}</option>
							@endif
						@endforeach
					</select>
					
				</div>
			</div>
			<div class="flex justify-between mt-6">
				<a class="px-4 py-2 sd:w-1/3 lg:w-1/4 text-gray-200 text-sm font-medium leading-5 text-center  transition-colors duration-150 bg-gray-800 border border-transparent rounded-lg hover:bg-gray-700 focus:outline-none focus:shadow-outline-purple focus:bg-gray-700" href="{{ url()->previous()}}"> Annuler </a>

				<button type="submit" class="sd:w-1/3 lg:w-1/4 px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
					Modifier
				</button>
				
			</div>
		</form>
	</div>
</div>