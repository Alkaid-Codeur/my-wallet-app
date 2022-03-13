@extends('layouts.main')

@section('title')
	Connexion
@endsection

@section('content')
<div class="bg-gray-200 py-20">
	<div class="flex items-center justify-center h-screen sm:px-6 bg-gray-200">
		<div class="w-full max-w-sm p-4 bg-white rounded-md shadow-md">
			<div class="flex items-center justify-center">
				
				<span class="text-2xl font-semibold text-gray-700">My Wallet</span>
			</div>

			@if ($errors->any())
				<div class="font-medium text-red-600 mt-4">
					Whoops! Corrigez les erreurs suivantes :
				</div>
				<div class="mb-6">
					<ul class="mt-4 text-red-600 list-disc list-inside text-sm">
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form class="mt-4" method="POST" action="{{route('login')}}">
				@csrf
				<label class="block">
					<span class="text-base text-gray-700">Email</span>
					<input type="email" class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500 @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
				</label>
				<label class="block mt-6 relative">
					<span class="text-base text-gray-700">Mot de passe</span>
					<input type="password" class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500" name="password">
					<svg xmlns="http://www.w3.org/2000/svg" class="password-viewer h-6 w-6 absolute top-9 right-4 stroke-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
						<path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" class="password-hider h-6 w-6 absolute top-9 right-4 stroke-slate-700 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
					</svg>
				</label>
				<div class="flex justify-between mt-6">
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

@section('scripts')
<script>
	let viewers = document.querySelectorAll('.password-viewer');
	let hiders = document.querySelectorAll('.password-hider');
	viewers.forEach(elt => {
		elt.addEventListener('click', function(e) {
			elt.parentNode.querySelector('input').setAttribute('type', 'text');
			elt.classList.add('hidden');
			elt.parentNode.querySelector('.password-hider').classList.remove('hidden');
		});
	});
	hiders.forEach(elt => {
		elt.addEventListener('click', function(e) {
			elt.parentNode.querySelector('input').setAttribute('type', 'password');
			elt.classList.add('hidden');
			elt.parentNode.querySelector('.password-viewer').classList.remove('hidden');
		});
	});
</script>
@endsection