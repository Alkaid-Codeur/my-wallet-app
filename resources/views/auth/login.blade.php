@extends('layouts.main')

@section('content')
<div>
	<div class="flex items-center justify-center h-screen sm:px-6 bg-gray-200">
		<div class="w-full max-w-sm p-4 sm:p-10 bg-white rounded-md shadow-md">
			<div class="flex items-center justify-center">
				
				<span class="text-2xl font-semibold text-gray-700">My Wallet</span>
			</div>
			<form class="mt-4" method="POST" action="{{route('login')}}">
				<label class="block">
					<span class="text-sm text-gray-700">Email</span>
					<input type="email" class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500" name="email">
				</label>
				<label class="block mt-3">
					<span class="text-sm text-gray-700">Mot de passe</span>
					<input type="password" class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500" name="password">
				</label>
				<div class="flex justify-between mt-4">
					<div>
						<label class="inline-flex items-center">
							<input type="checkbox" class="text-indigo-600 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500" name="remember">
							<span class="mx-2 text-sm text-gray-600">Rester connecté</span>
						</label>
					</div>
					<div>
						<a class="block text-sm text-indigo-700 fontme hover:underline" href="#">Mot de passe oublié?</a>
					</div>
				</div>
				<div class="mt-6">
					<button type="submit" class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md focus:outline-none hover:bg-indigo-500"> Se connecter </button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection