@extends('layouts.main')

@section('content')
<div class="font-sans text-gray-900 antialiased">
	<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">


		<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
			<div class="mb-4 text-base text-gray-600">
				Merçi de vous être enregistré ! Avant de commencez, nous vous invitons à vérifier votre compte en cliquant sur le lien de vérification que nous avons envoyé à votre adresse. <br>
				Si vous n'avez pas reçu de mail, nous serons heureux de vous en envoyer un autre. 
			</div>

			@if (session('status') == 'verification-link-sent')
				<div class="mb-4 font-medium text-sm text-green-600">
					{{ __('Un nouveau lien de vérification vous a été envoyé à l\'adresse que vous avez utilisé lors de l\'inscription') }}
				</div>
			@endif

			
			<div class="mt-4 flex items-center justify-between">
				<form method="POST" action="{{route('verification.send')}}">
					@csrf
					<div>
						<button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
							Renvoyer un mail
						</button>
					</div>
				</form>

				<form method="POST" action={{}}">
					<input type="hidden" name="_token" value="gFllAz9jwMsEqXpKxI9DFqwlJbkHYMQ21J3CD58d">
					<button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
						Déconnexion
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
