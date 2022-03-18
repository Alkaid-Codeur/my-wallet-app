@php
	$user = Auth::user();
@endphp

<!DOCTYPE html>
<html lang="fr"  x-data="data()">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>

	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

	<link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
	
	<link rel="shortcut icon" href="{{asset('assets/images/logo.svg')}}" type="image/x-icon">
	<script src="{{asset('assets/js/app.js')}}" defer></script> 
	<script src="{{asset('assets/js/init-alpine.js')}}"></script>
	<script src="{{asset('assets/js/focus-trap.js')}}" defer></script>
</head>
<body class="font-sans antialiased dark:bg-gray-900" >
	
	<div class="bg-gray-200 dark:bg-slate-900 font-roboto grid md:grid-cols-4 xl:grid-cols-6 gap-0 grid-flow-row-dense h-screen">
		<x-app.partials.sidebar></x-app.partials.sidebar>

		<div class="col-span-full lg:col-span-3 xl:col-span-5">
			<x-app.partials.header :user="$user"></x-app.partials.header>
			<main class="bg-gray-200">
				<div class="mx-auto px-6 py-8">
					@yield('content')
				</div>
			</main>
		</div>
	</div>

	<div class="fixed bottom-0 right-0 w-full md:bottom-8 md:right-12 md:w-auto z-60">
		<div class="bg-slate-800 text-slate-50 text-sm p-3 md:rounded shadow-lg flex justify-between">
			<div>
				👉 <a class="hover:underline" href="https://github.com/alkaid-codeur" target="_blank" rel="noreferrer">Suivez nous sur GitHub</a>
			</div>
			<button class="text-slate-500 hover:text-slate-400 ml-5"><span class="sr-only">Close</span><svg class="w-4 h-4 shrink-0 fill-current" viewBox="0 0 16 16"><path d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z"></path></svg></button>
		</div>
	</div>

	@yield('scripts')
</body>