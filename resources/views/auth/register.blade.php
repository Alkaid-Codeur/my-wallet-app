@extends('layouts.main')

@section('title')
- Register
@endsection


@section('content')

<div class="font-sans text-gray-900 antialiased">
	<div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 py-12">
		
		<div class="w-full sm:max-w-md mt-6 px-6 sm:px-12 py-12 bg-white shadow-md overflow-hidden sm:rounded-lg">
			<div class="flex items-center justify-center">
				<span class="text-2xl font-semibold text-gray-700">My Wallet</span>
			</div>
			<!-- Validation Errors -->

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
			
			<form class="mt-4" method="POST" action="{{route('register')}}">

				@csrf
				<!-- Name -->
				<div>
					<label class="block font-medium text-sm text-gray-700" for="name">Nom complet</label>
					<input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm  block mt-1 w-full capitalize @error('name') is-invalid @enderror" id="name" type="text" name="name" required="required" autofocus="autofocus" value="{{old('name')}}">
				</div>

				<!-- Email Address -->
				<div class="mt-4">
					<label class="block font-medium text-sm text-gray-700" for="email">Email</label>
					<input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full @error('email') is-invalid @enderror" id="email" type="email" name="email" required="required" value="{{old('email')}}">
				</div>

				<!-- Password -->
				<div class="mt-4 relative">
					<label class="block font-medium text-base text-gray-700" for="password">Mot de passe</label>
					<input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full @error('password') is-invalid @enderror" id="password" type="password" name="password" required="required" autocomplete="new-password">
					<svg xmlns="http://www.w3.org/2000/svg" class="password-viewer h-6 w-6 absolute top-9 right-4 stroke-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
						<path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" class="password-hider h-6 w-6 absolute top-9 right-4 stroke-slate-700 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
					</svg>
				</div>

				<!-- Confirm Password -->
				<div class="mt-4 relative">
					<label class="block font-medium text-base text-gray-700" for="password_confirmation">Confirmer le mot de passe</label>
					<input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="password_confirmation" type="password" name="password_confirmation" required="required">
					<svg xmlns="http://www.w3.org/2000/svg" class="password-viewer h-6 w-6 absolute top-9 right-4 stroke-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
						<path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" class="password-hider h-6 w-6 absolute top-9 right-4 stroke-slate-700 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
					</svg>
				</div>

				<div class="flex items-center justify-between mt-8">
					<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{route('login')}}">
						Déja un compte?
					</a>
					<button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4">S'enregistrer</button>
				</div>
			</form>
		</div>
	</div>
</div>

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

@endsection